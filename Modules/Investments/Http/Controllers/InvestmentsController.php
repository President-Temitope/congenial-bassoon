<?php

namespace Modules\Investments\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Modules\Investments\Repositories\InvestmentsRepository;

class InvestmentsController extends Controller
{
    /**
     * @var InvestmentsRepository
     */
    protected $investment;

    public function __construct(InvestmentsRepository $investmentsRepository)
    {
        $this->investment = $investmentsRepository;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $investments = $this->investment->queryWithStatus();
        return view('investments::index')->with('investments',$investments);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'name' => ['required','string'],
            'description' => ['required','string'],
            'priceRangeOne' => ['required','numeric'],
            'priceRangeTwo' => ['required','numeric'],
            'percentage' => ['required','numeric']
        ]);
        if ($validator->failed()){
            return redirect()->back()->withErrors($validator);
        }
        $this->investment->create($validator->validated());
        return redirect()->back()->with('success','Investment plan added successfully');
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
      $validator =   Validator::make($request->all(),[
          'name' => ['required','string'],
          'description' => ['required','string'],
          'priceRangeOne' => ['required','numeric'],
          'priceRangeTwo' => ['required','numeric'],
          'percentage' => ['required','numeric']
        ]);
        if ($validator->failed()){
            return redirect()->back()->withErrors($validator);
        }
        $id = $request['id'];
        $this->investment->edit($id,$validator->validated());
        return redirect()->back()->with('success','Investment plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->investment->delete($id);
        return redirect()->back()->with('success','Investment plan deleted successfully');
    }

    public function viewAll(){
       $investments =  $this->investment->all();
       return view('investments::viewAll')->with('investments',$investments);
    }

    public function deactivatePlan($id){
        $this->investment->edit($id,['status'=> 0]);
        return redirect()->back()->with('success','Investment plan updated successfully');
    }

    /**
     *getPlan method
     * This handles the purchase of plans by users
     */
    public function getPlan($id)
    {
        DB::table('payments')
            ->insert(
                [
                  'user_id' => auth()->id(),
                  'investment_id' => $id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        return redirect()->back()->with('success','Offer made successfully, await confirmation');

    }

}
