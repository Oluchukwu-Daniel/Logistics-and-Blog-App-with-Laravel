
@extends('admin.include.master')
@section('content')

    <!-- Main content -->
    

      <div class="container-fluid">

        <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-edit"></i> Orders
              <div class="card-actions">
                <a href="https://datatables.net">
                  <small class="text-muted">docs</small>
                </a>
              </div>
            </div>
            <div class="card-body">
              

              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>user id</th>
                    <th>weight</th>
                    <th>pick up</th>
                    <th>drop off</th>
                    <th>distance</th>
                    <th>freight type</th>
                    <th>estimate</th>
                    <th>Order date</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Submit</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($quotes as $quote)
                  
                    <form action="{{route('update', $quote['id'])}}" method="post">
                      @csrf
                 
                    <tr>
                      <td>{{$quote['id']}}</td>
                      <td>{{$quote['user_id']}}</td>
                      <td>{{$quote['weight']}}</td>
                      <td>{{$quote['pick_up']}}</td>
                      <td>{{$quote['drop_off']}}</td>
                      <td>{{$quote['distance']}}</td>
                      <td>{{$quote['freight_type']}}</td>
                      <td>{{$quote['estimate']}}</td>
                      <td>{{$quote['created_at']}}</td>
                      <td>{{$quote['status']}}</td>
                      <td>
                          <select name="update" class="dropdown dropdown-toggle">
                            <option value="null" class="dropdown open"></option>
                            <option value="In-transit">In-transit</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Completed">Completed</option>
                          </select>
                      </td> 
                      <td><button type="submit">Submit</button></td>
                    </tr>
                  </form>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.conainer-fluid -->
    </main>
  </div>
@endsection