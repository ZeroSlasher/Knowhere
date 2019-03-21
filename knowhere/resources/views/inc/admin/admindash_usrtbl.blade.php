 <div class="col-sm-12 col-md-8 col-lg-9">
     <div class="page-content">
         <div class="inner-box">
             <div class="dashboard-box">
                 <h2 class="dashbord-title">User Management</h2>
             </div>
             <div class="dashboard-wrapper">
                 <div class="dashboard-sections">
                     <div class="row">
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-write"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Total Users</a></h2>
                                     <h3>{{$total}} users</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-add-files"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Blocked users</a></h2>
                                     <h3>{{$blocked}} users</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-support"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Active users</a></h2>
                                     <h3>{{$active}} users</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 @include('inc.message')
                 <table class="table table-responsive dashboardtable tablemyads">
                     <thead>
                         <tr>
                             <th>Username</th>
                             <th>email</th>
                             <th>phone</th>
                             <!-- <th>Location</th> -->
                             <th>Status</th>
                             <th>Actions</th>
                             <!--<th>Proofs</th>
                             <th>Status</th> -->
                         </tr>
                     </thead>
                     <tbody>

                         @isset($urqst)
                         @foreach($urqst as $cmp)
                         <form name="approveform" action="/userblock" method="POST">
                             @csrf

                             <!-- deleted expired inactive sold deleted -->
                             <tr data-category="inactive">
                                 <!-- outlet name -->
                                 <td class="Title">
                                     <h3>{{$cmp->name}}</h3>
                                 </td>
                                 <!-- City -->
                                 <td data-title="Title">
                                     <input type="text" id="email" name="email" value="{{$cmp->email}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                         size='20' readonly />

                                     <!-- <h3>{{$cmp->email}}</h3> -->
                                 </td>
                                 <input type="text" name="uregid" id="uregid" hidden value="{{$cmp->uregid}}">

                                 <!-- Email -->
                                 <td data-title="Phone"><span class="adcategories">{{$cmp->phone}}</span>
                                 </td><!-- Phone -->


                                 <td data-title="Status"><span class="adstatus adstatusactive">{{$cmp->status}}</span>
                                 </td>

                                 <td data-title="Action">
                                     <div class="btns-actions">
                                         <!-- <a class="btn-action btn-view" href="/userblock/{{$cmp->uregid}}"><i
                                                 class="lni-ban"></i></a> -->
                                         @if($cmp->status =='active')
                                         <button type="submit" class="btn-action btn-delete"><i
                                                 class="lni-ban"></i></button>

                                         @else
                                         <button type="submit" class="btn-action btn-view"><i
                                                 class="lni-check-mark-circle"></i></button>
                                         @endif
                                         <!-- <a class="btn-action btn-edit" href="/userunblock/{{$cmp->uregid}}"><i
                                                 class="lni-check-mark-circle"></i></a> -->
                                     </div>
                         </form>

                         </td>
                         </tr>
                         @endforeach
                         @endisset
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>