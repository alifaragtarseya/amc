<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreFaq;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    protected $model ;

    public function __construct(Faq $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.faqs.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.faqs.form' ,[
            'resource' => $this->model
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreFaq $request
     * @return Renderable
     */
    public function store(StoreFaq $request)
    {
        $inputs = $request->validated();

        // dd($inputs);
        $this->model->create($inputs);
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.faq');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.faqs.form' ,[
            'resource' => $this->model->findOrFail($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreFaq $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreFaq $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
       
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.faq');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.faq');
    }


}
