 <div class="col-sm-12 col-md-8 col-lg-9">
     <div class="page-content">
         <div class="inner-box">
             <div class="dashboard-box">
                 <h2 class="dashbord-title">Approve requests</h2>
             </div>
             <div class="dashboard-wrapper">
                 <div class="dashboard-sections">
                     <div class="row">
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-write"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Total Requests</a></h2>
                                     <h3>{{$total}} Requests</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-add-files"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Approved Requests</a></h2>
                                     <h3>{{$approved}} Approved</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                             <div class="dashboardbox">
                                 <div class="icon"><i class="lni-support"></i></div>
                                 <div class="contentbox">
                                     <h2><a href="#">Pending approvals</a></h2>
                                     <h3> {{$pending}} Pending</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 @include('inc.message')
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
                         @isset($rqst)

                         @foreach($rqst as $cmp)
                         <form id="approveform" action="/rqstapprove" method="POST">
                             @csrf

                             <!-- deleted expired inactive sold deleted -->
                             <tr data-category="inactive">

                                 <!-- outlet name -->
                                 <td class="Title">
                                     <input type="text" id="oname" name="oname" value="{{$cmp->outletname}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif"
                                         size='10' readonly />
                                 </td>

                                 <!-- City -->
                                 <td data-title="Title">
                                     <input type="text" name="cityid" id="cityid" hidden value="{{$cmp->city_id}}">
                                     <input type="text" id="city" name="city" value="{{$cmp->city}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                         size='10' readonly />
                                     <span>{{$cmp->district}}-{{$cmp->state}}</span>
                                 </td>

                                 <!-- Category -->
                                 <td data-title="Category">
                                     <input type="text" id="subcat" name="subcat" value="{{$cmp->subcatagory}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                         size='10' readonly />
                                     <!-- <span class="adcategories">{{$cmp->subcatagory}}</span> -->
                                 </td>

                                 <!-- Owner name -->
                                 <td data-title="owner">
                                     <input type="text" id="owname" name="owname" value="{{$cmp->ownername}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                         size='10' readonly />
                                 </td>

                                 <!-- Phone -->
                                 <td data-title="Phone">
                                     <input type="text" id="phone" name="phone" value="{{$cmp->phone}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                         size='10' readonly />
                                 </td>

                                 <!-- Email -->
                                 <td data-title="Email">
                                     <input type="text" id="email" name="email" value="{{$cmp->email}}"
                                         style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                         size='20' readonly />
                                 </td>

                                 <!-- proof -->
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

                                 <!-- status -->
                                 <td data-title="Status">
                                     <span class="adstatus adstatusactive">{{$cmp->status}}</span>
                                 </td>


                                 <input type="text" name="rqst_id" id="rqst_id" hidden value="{{$cmp->rqst_id}}">


                                 <!-- Action -->
                                 <td data-title="Action">
                                     <div class="btns-actions">
                                         <button type="submit" class="btn-action btn-edit"><i
                                                 class="lni-check-mark-circle"></i></button>
                                         <a class="btn-action btn-delete" href="/rqstdisapprove/{{$cmp->rqst_id}}"><i
                                                 class="lni-ban"></i></a>
                                         <a class="btn-action btn-view" href="/sendEmail"><i class="lni-cloud"></i></a>


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