<?php
    namespace App\Services;

    use App\Models\Colocations;
    use App\Models\Depense;
    use App\Models\Membership;
    use App\Models\User;

    class ColocationsServices {
        public function creation(array $data) {
            $colocation = Colocations::create($data);
            Membership::create([
                'member_id' => auth()->user()->id,
                'colocation_id' => $colocation->id,
                'isOwner' => true
            ]);
            return $colocation;
        }

        public function getAllMemberInColocation($colocation_id) {
            return Membership::where('colocation_id' , $colocation_id)->get();
        }

        public function desactiveColocation(int $id) {
            $colocation = Colocations::find($id);
            return $colocation->update([
                'isActive' => false
            ]);
        }

        public function totalDepense($id) {
            return Depense::where('colocation_id' , $id)->sum('amount');
        }

        public function totalDepenseCeMois($id) {
            return Depense::whereMonth('created_at' , now()->month)->whereYear('created_at' , now()->year)->where('colocation_id' , $id)->sum('amount');
        }

        public function membersNum($id) {
            return Membership::where('colocation_id' , $id)->count();
        }

        public function members($id) {
            return Membership::where('colocation_id' , $id)->get();
        }

        public function payements($id) {
            $colocation = Colocations::with(['depenses.payments.receiver', 'depenses.payer'])->findOrFail($id);

            $payments = $colocation->depenses->flatMap(function($depense) {
                return $depense->payments->map(function($payment) use ($depense) {
                    $payment->payer = $depense->user;
                    return $payment;
                });
            })
            ->sortByDesc('created_at')
            ->take(4);

            return $payments;
        }
    }