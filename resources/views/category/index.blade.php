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

                    <a href="#" class="btn btn-success add-btn" role="button" aria-disabled="true"
                       data-toggle="modal" 
                       data-target="#addModolacategory">
                       Add Category
                     </a><br><br>
                              
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
                                <a class="btn btn-outline-success" href="#" data-href="{{ url('admin/editcategory/'.$category->id) }}" category-id="{{$category->id}}"  data-toggle="modal" data-target="#editModolad_category">
                                                                <i class="fa fa-pencil m-r-5"></i>Edit
                                </a>
                                <a class="btn btn-outline-danger" href="#" data-toggle="modal"  data-target="#deleteModola_category" 
                                                                 delete-id="{{$category->id}}">
                                                                <i class="fa fa-trash-o m-r-5"></i>{{__('trans.Delete')}}
                                </a>
                                </td>
                            </tr>

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
      <div id="addModolacategory" class="modal custom-modal fade" role="dialog">
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
                           
								<form method="post" action="{{route('addcategories')}}">
                                   @csrf
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Category_Name <span
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
                                                type="add">Save</button>
                                                            
                                    </div>
                                            
                                  
								</form>
                                   
							
                                    
							</div>
						</div>
					</div>
				</div>
   
 </div>
     


   <!-- /Add job - -Evaulation -->

            <!-- Edit Category -->
            <div id="editModolad_category" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{__('trans.Edit Category')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger print-error-msg" style="display:none">
                                <ul></ul>
                            </div>
                            <form method="post">
                             @csrf
                                <div class="row">
  
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">{{__('trans.CategoryName')}} <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="category">
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="edit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Category -->


  <!-- Delete task -->
  <div class="modal custom-modal fade" id="deleteModola_category" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>{{__('trans.Delete category' )}}</h3>
                                <p>{{__('trans.Are you sure want to delete?')}}</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary category-btn-del">{{__('trans.Delete')}}</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">{{__('trans.Cancel')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- /Delete task -->


@endsection

@section('script')
<script>
    	$("#addModolacategory button,#editModolad_category button").click(function(e){
           
           e.preventDefault();
             
           if($(this).attr('type')==="add"){
               url=$('#addModolacategory form').attr('action');
               data={category:$("#addModolacategory input[name='category']").val()};
           }
           if($(this).attr('type')==="edit"){
               url=$('#editModolad_category form').attr('action');
               //this is your request
               data={category:$("#editModolad_category input[name='category']").val()};
            //    console.log(url,data);
            //    return;

           }	
           $.ajax({
               url:url,
               data:data,
               type:'POST',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              
               success: function(data) {
                   if(data.hasOwnProperty('success')){
                   
                       location.reload(true);
                   }else{
                       
                       printErrorMsg(data.error);
                   }
               }
           });

       });



//edit modloma
$("#editModolad_category").on('show.bs.modal', function(event) {

var button = $(event.relatedTarget) //Button that triggered the modal

var getHref = button.data('href'); //get button href

var id = button.attr('category-id'); 
update_url="/admin/update_category/"+id;
 $('#editModolad_category form').attr('action',update_url);

    $.ajax({
		url:getHref,
		// data:{id:id},
	  }).done(function(data)
         {
            $("#editModolad_category form input[name='category']").val(data.category);
	    });
});


$("#deleteModola_category").on('show.bs.modal', function(event) {
           
           var button = $(event.relatedTarget) //Button that triggered the modal
           var id = button.attr('delete-id');
           del_id=id;
           delete_url="/admin/delete_category/"+del_id;
           console.log( delete_url);
           });

 $("#deleteModola_category .category-btn-del").click(function()
 {
               $.ajax({
                       url:delete_url,    
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       type:"post"
                       }).done(function(data) {
                        location.reload(true);
                   });
 });      

       function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }



</script>


@endsection
 