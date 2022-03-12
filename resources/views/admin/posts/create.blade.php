<x-admin-master>
 
@section('content')

<h1>Create </h1>

<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
@csrf <!--  Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user -->
<div class="form-group">
  <label for="title">Title</label>
  <input type="text" 
         name="title"
         class="form-control" 
         id="title" 
         aria-describedby="" 
         placeholder="Enter Title">
</div>

<div class="form-group">
  <label for="file">File</label>
  <input type="file" 
         name="post_image" 
         class="form-control"
         id="post_image"
         placeholder="">
</div>

<div class="form-group">
   <textarea  name="body"
              class="form-control" 
              id="body" 
              cols="30" 
              rows="10">
  </textarea>
</div>

<button type="submit"  class="btn btn-primary">Submit</button>
</form>

@endsection


</x-admin-master>