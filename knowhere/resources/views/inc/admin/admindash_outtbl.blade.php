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
                                    <h2><a href="#">Total Outlet Owners</a></h2>
                                    <h3>{{$total}} Owners</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="dashboardbox">
                                <div class="icon"><i class="lni-add-files"></i></div>
                                <div class="contentbox">
                                    <h2><a href="#">Blocked Owners</a></h2>
                                    <h3>{{$blocked}} Owners</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="dashboardbox">
                                <div class="icon"><i class="lni-support"></i></div>
                                <div class="contentbox">
                                    <h2><a href="#">Active owners</a></h2>
                                    <h3>{{$active}} owners</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @include('inc.message')
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
                        @isset($orqst) @foreach($orqst as $cmp)
                        <form name="approveform" action="/ownerblock" method="POST">
                            @csrf

                            <!-- deleted expired inactive sold deleted -->
                            <tr data-category="inactive">

                                <input type="text" name="oregid" id="oregid" hidden value="{{$cmp->regid}}">

                                <!-- owner name -->
                                <td class="Title">
                                    <h3>{{$cmp->name}}</h3>
                                </td>
                                <!-- email -->
                                <td data-title="Title">
                                    <input type="text" id="email" name="email" value="{{$cmp->email}}" style="background:rgba(0,0,0,0);border:none;cursor:not-allowed;font-family:montserrat, sans-serif;"
                                        size='20' readonly />
                                </td>
                                <!-- Phone -->
                                <td data-title="Phone"><span class="adcategories">{{$cmp->phone}}</span>
                                </td>
                                <!-- city  -->
                                <td data-title="Email"><span class="adcategories">{{$cmp->city}}</span>
                                    <span>District -- State</span>
                                </td>
                                <!-- address  -->
                                <td data-title="Phone"><span class="adcategories">{{$cmp->oaddress}}</span>
                                </td>
                                <!-- status -->
                                <td data-title="Status"><span class="adstatus adstatusactive">{{$cmp->status}}</span>
                                </td>
                                <td data-title="Action">
                                    <div class="btns-actions">
                                        @if($cmp->status =='active')
                                        <button type="submit" class="btn-action btn-delete"><i
                                                 class="lni-ban"></i></button> @else
                                        <button type="submit" class="btn-action btn-view"><i
                                                 class="lni-check-mark-circle"></i></button>                                        @endif
                                    </div>
                        </form>
                        </td>
                        </tr>
                        @endforeach @endisset

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>