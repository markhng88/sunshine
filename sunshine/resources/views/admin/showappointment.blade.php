<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>admin
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <!-- @include('admin.body') -->
        <div class="container-fluid page-body-wrapper">
        <table style="width:100%; border-collapse: collapse; margin: 200px;">
    <thead>
        <tr style="background-color: black; color: white;">
            <th style="padding: 11px; border: 1px solid #ddd;">Babysitter</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Customer Name</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Email</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Date</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Message</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Status</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Approve</th>
            <th style="padding: 11px; border: 1px solid #ddd;">Cancel</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $appoint)
        <tr style="background-color: skyblue;">
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoint->babysitter}}</td>
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoint->name}}</td>
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoint->email}}</td>
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoint->date}}</td>
            <td style="padding: 15px; border: 1px solid #ddd;">{{$appoint->message}}</td>
            <td style="padding: 15px; border: 3px solid #ddd;">{{$appoint->status}}</td>
            <td style="padding: 15px; border: 3px solid #ddd;"><a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approve</a></td>
            <td style="padding: 15px; border: 3px solid #ddd;"><a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a></td>
        </tr>
        @endforeach
        <!-- Add more rows as needed -->
    </tbody>
</table>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- @include('admin.script') -->
  </body>
</html>