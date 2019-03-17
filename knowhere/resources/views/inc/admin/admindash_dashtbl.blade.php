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
                             <th>Outlet name</th>
                             <th>City</th>
                             <th>Category</th>
                             <th>Owner name</th>
                             <th>Phone</th>
                             <th>Email</th>
                             <th>Proofs</th>
                             <th>Status</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         <form name="approveform" action="#" method="POST">
                             @csrf
                             @isset($rqst)

                             @foreach($rqst as $cmp)
                             <!-- deleted expired inactive sold deleted -->
                             <tr data-category="inactive">
                                 <!-- outlet name -->
                                 <td class="Title">
                                     <h3>{{$cmp->outletname}}</h3>
                                 </td>
                                 <!-- City -->
                                 <td data-title="Title">
                                     <h3>{{$cmp->city}}</h3>
                                     <span>District -- State</span>
                                 </td>
                                 <!-- Category -->
                                 <td data-title="Category"><span class="adcategories">{{$cmp->subcatagory}}</span>
                                 </td>
                                 <!-- Owner name -->
                                 <td data-title="owner"><span class="adcategories">{{$cmp->ownername}}</span>
                                 </td>
                                 <!-- Email -->
                                 <td data-title="Phone"><span class="adcategories">{{$cmp->phone}}</span>
                                 </td><!-- Phone -->
                                 <td data-title="Email"><span class="adcategories">{{$cmp->email}}</span>
                                 </td>
                                 <td data-title="Action">
                                     <div class="btns-actions">
                                         <a class="btn-action btn-view" href="/uploads/{{$cmp->Proof1}}"><i
                                                 class="lni-cloud-download"></i></a>
                                         <a class="btn-action btn-edit" href="/uploads/{{$cmp->Proof2}}"><i
                                                 class="lni-cloud-download"></i></a>
                                         <a class="btn-action btn-delete" href="/uploads/{{$cmp->Proof3}}"><i
                                                 class="lni-cloud-download"></i></a>
                                     </div>
                                 </td>
                                 <td data-title="Status"><span class="adstatus adstatusactive">{{$cmp->status}}</span>
                                 </td>
                                 <td data-title="Action">
                                     <div class="btns-actions">
                                         <!-- <a class="btn-action btn-view" href="/approve"><i class="lni-ban"></i></a> -->
                                         <a class="btn-action btn-edit" href="/rqstapprove/{{$cmp->rqst_id}}"><i
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