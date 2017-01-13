<?php
namespace App\Http\ViewComposer;

use App\Models\Make;
use App\Models\MakeYear;
use App\Models\Model;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class MakeModelForm
{
    public function compose(View $view)
    {
        $makeForm = Request::only('make_id','makeyear_id', 'model_id');
            $makes = Make::orderBy('name', 'ASC')
                ->pluck('name', 'id')
                ->toArray();
            $makeYears = $models = array();
            if ($makeForm['make_id'] != null) {
                $makeYears = MakeYear::where('make_id', $makeForm['make_id'])
                    ->orderBy('year', 'ASC')
                    ->pluck('year', 'id')
                    ->toArray();

                    if ($makeForm['makeyear_id'] != null) {
                        $models = Model::where('makeyear_id', $makeForm['makeyear_id'])
                            ->orderBy('name', 'ASC')
                            ->pluck('name', 'id')
                            ->toArray();
                    }
            }
        $view->with(compact('makeForm','makes','makeYears','models'));
    }
}