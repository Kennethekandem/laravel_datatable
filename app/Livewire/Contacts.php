<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Contact;

class Contacts extends Component
{
    use WithPagination;

    public $search = "";
    public $filters = [
        'age_min' => null,
        'age_max' => null,
        'occupation' => null,
        'min_votes' => null,
        'max_votes' => null
    ];

    protected $queryString = ['search', 'filters'];

    public function render()
    {
        $query = DB::table("contacts")
            ->leftJoin('votes', 'contacts.id', '=', 'votes.contact_id')
            ->select('contacts.*', 'votes.votes');

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        }


        if ($this->filters['age_min']) {
            $query->where('age', '>=', $this->filters['age_min']);
        }

        if ($this->filters['age_max']) {
            $query->where('age', '<=', $this->filters['age_max']);
        }

        if ($this->filters['occupation']) {
            $query->where('occupation', $this->filters['occupation']);
        }

        if ($this->filters['min_votes']) {
            $query->where('votes', '>=', $this->filters['min_votes']);
        }

        if ($this->filters['max_votes']) {
            $query->where('votes', '<=', $this->filters['max_votes']);
        }

        $contacts = $query->simplePaginate(10);

        return view('livewire.contacts', [
            'contacts' => $contacts,
            'occupations' => Contact::distinct('occupation')->pluck('occupation')
        ]);
    }

    public function applyFilters()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->filters = [
            'age_min' => null,
            'age_max' => null,
            'occupation' => null,
            'min_votes' => null,
            'max_votes' => null
        ];
        $this->resetPage();
    }
}
