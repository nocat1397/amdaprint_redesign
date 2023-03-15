<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.link')
    <style>
        #data-success, #data-error {
            display: none;
        }
        .checkbox-buttons-container input {
  position: absolute;
  left: -100vw; /* don't hide the input but move it out of view instead for better accessibility   */
}

.checkbox-buttons-container label {
  padding: 4px 16px;
  border: 2px solid #000;
  border-radius: 5px;
  color: #000;
  display: inline-block;
  position: relative;
  transition: 0.3s ease-in-out;
}

.checkbox-buttons-container label:not(:last-child) {
  margin-right: 16px;
}

.checkbox-buttons-container label:hover {
  cursor: pointer;
  /* opacity: 0.7; */
  transition: 0.3s ease-in-out;
}

.checkbox-buttons-container input:checked + label {
  background-color: #000;
  border-color: #000;
  color: #fff;
  box-shadow: none!important;
  transition: 0.3s ease-in-out;
}

/* .checkbox-buttons-container input:checked + label::after {
  width: 16px;
  height: 16px;
  padding: 4px;
  border: 2px solid #e9e9e9;
  border-radius: 50%;
  background: #059f00;
  content: "✔";
  font-size: 12px;
  color: #fff;
  position: absolute;
  top: -16px;
  right: -16px;
} */
.newBlades {
  display: none;
}
    </style>

</head>
<body class="hold-transition sidebar-mini over">
<div class="wrapper">

    @include('admin.section.navbar')
    
    @include('admin.section.sidebar')

    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dealers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Dealers</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid mb-5">
          <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
              <div class="card shadow mt-3 mb-5">
                <div class="card-body table-responsive p-0">
                    <table class="table table-stripped" style="width: 100%;white-space:nowrap">
                        <thead>
                            <tr class="bg-dark">
                                <th>#</th>
                                <th>PERSONAL DETAILS</th>
                                <th>EMAIL</th>
                                <th>COMPANY NAME</th>
                                <th>COMPANY MOBILE</th>
                                <th>POSITION</th>
                                <th>WEBSITE</th>
                                <th>RESELLER</th>
                                <th>INDUSTRY TYPE</th>
                                <th>FIND US ON</th>
                                <th>TAX ID</th>
                                <th>CERTIFICATE</th>
                                <th>LICENSE</th>
                                <th>JOINING DATE</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($dealers as $dealer)
                            <tr>
                                <td>{{++$loop->index}}</td>
                                <td>
                                    <strong>{{$dealer->fname.' '.$dealer->lname}}</strong>
                                    <p class="mb-0">{{$dealer->address}}-{{$dealer->zip}} {{$dealer->city}} {{$dealer->state}} {{$dealer->country}}</p>
                                    <strong>{{$dealer->mobile}}</strong>
                                </td>
                                <td>{{$dealer->email}}</td>
                                <td>{{$dealer->company_name}}</td>
                                <td>{{$dealer->company_phone}}</td>
                                <td>{{$dealer->position}}</td>
                                <td>{{$dealer->website}}</td>
                                <td>{{$dealer->reseller}}</td>
                                <td>{{$dealer->industry_type}}</td>
                                <td>{{$dealer->find_us}}</td>
                                <td>{{$dealer->tax_id}}</td>
                                <td>
                                    <a href="/img/dealers/{{$dealer->id}}/{{$dealer->certificate}}" data-lightbox="image-1">
                                        <img src="/img/dealers/{{$dealer->id}}/{{$dealer->certificate}}" class="img-fluid">
                                    </a>
                                </td>
                                <td>
                                    <a href="/img/dealers/{{$dealer->id}}/{{$dealer->license}}" data-lightbox="image-1">
                                        <img src="/img/dealers/{{$dealer->id}}/{{$dealer->license}}" class="img-fluid">
                                    </a>
                                </td>
                                <td>{{$dealer->created_at->diffForHumans()}}</td>
                            </tr>
                            @empty
                            <tr>
                                No Data Found
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
           </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  @include('admin.section.footer')
{{-- @endif --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    {{-- @include('admin.script') --}}
<script src="{{asset('/admin/js/pushmenu.js')}}"></script>

</body>
</html>
