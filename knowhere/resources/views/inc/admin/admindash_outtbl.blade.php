 <div class="col-sm-12 col-md-8 col-lg-9">
     <div class="page-content">
         <div class="inner-box">
             <div class="dashboard-box">
                 <h2 class="dashbord-title">Dashboard</h2>
             </div>
             <div class="dashboard-wrapper">
                 <div class="dashboard-sections">
                     <div class="row">
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-write"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Total Ad Posted</a></h2>
                                     <h3>480 Add Posted</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-add-files"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Featured Ads</a></h2>
                                     <h3>80 Add Posted</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-support"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Offers / Messages</a></h2>
                                     <h3>2040 Messages</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <table class="table table-responsive dashboardtable tablemyads">
                     <thead>
                         <tr>
                             <th>Owner name</th>
                             <th>email</th>
                             <th>phone</th>
                             <th>Location</th>
                             <th>Address</th>
                             <th>Status</th>
                             <th>Actions</th>
                             <!--<th>Proofs</th>
                             <th>Status</th> -->
                         </tr>
                     </thead>
                     <tbody>
                         <form name="approveform" action="#" method="POST">
                             @csrf
                             @isset($orqst)

                             @foreach($orqst as $cmp)
                             <!-- deleted expired inactive sold deleted -->
                             <tr data-category="inactive">
                                 <!-- outlet name -->
                                 <td class="Title">
                                     <h3>{{$cmp->name}}</h3>
                                 </td>
                                 <!-- City -->
                                 <td data-title="Title">
                                     <h3>{{$cmp->email}}</h3>

                                 </td>
                                 <!-- Email -->
                                 <td data-title="Phone"><span class="adcategories">{{$cmp->phone}}</span>
                                 </td><!-- Phone -->
                                 <td data-title="Email"><span class="adcategories">{{$cmp->city}}</span>
                                     <span>District -- State</span>
                                 </td>
                                 <td data-title="Phone"><span class="adcategories">{{$cmp->address}}</span>
                                 </td><!-- Phone -->
                                 <td data-title="Status"><span class="adstatus adstatusactive">{{$cmp->status}}</span>
                                 </td>
                                 <td data-title="Action">
                                     <div class="btns-actions">
                                         <a class="btn-action btn-view" href=""><i class="lni-ban"></i></i></a>
                                         <a class="btn-action btn-edit" href=""><i
                                                 class="lni-check-mark-circle"></i></a>
                                     </div>
                                 </td>
                             </tr>
                             @endforeach
                             @endisset
                         </form>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>