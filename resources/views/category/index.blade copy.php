@extends('layouts.master')

@section('title')
    categories
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>categories</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">categories List</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body">

                    @if(session()->has('delete'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{\session()->get('delete')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <a href="{{route('categories.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add Category</a><br><br>
                    <div class="col-auto float-right ml-auto">
                               
                                
                               <a href="#" class="btn add-btn" id="category_id" data-toggle="modal" data-target="#add_category" 
                                class="add_category"  ><i class="fa fa-plus"></i> add category</a>  
                       </div>        
                              
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category_Name</th>
                            <th>Created_at</th>
                            <th>Processes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_post{{$category->id}}">Delete</button>
                                </td>
                               
                            </tr>
                               @include('category.destroy')

                        @endforeach
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
 <!-- /Add job - -Evaulation -->
 
      <!-- /Add job - -category -->
      <div id="add_category" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">add_category</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
                                <div class="alert alert-danger print-error-msg" style="display:none">
                                    <ul></ul>
                                </div>
                           
								<form method="" action="{{route('categories.store')}}">
                                
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">{{ __('trans.Title') }} <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control job_title" type="text" name="category"  required >
                                            @error('category')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                        <!--target location check -->
                                    </div>
                                        
                                    <div class="submit-section">
                                        
                                        <button  id="addcategory_button" class="btn btn-primary category-btn" 
                                                type="add">{{__('trans.Save')}}</button>
                                                            
                                    </div>
                                            
                                  
								</form>
                                   
							
                                    
							</div>
						</div>
					</div>
				</div>
   
 </div>
     


   <!-- /Add job - -Evaulation -->


   <!-- /Add job - -Evaulation -->
@endsection
