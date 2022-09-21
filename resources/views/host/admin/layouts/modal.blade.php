<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Your Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="admin_1 admin_2">
                    <div class="col-md-12">
                        <div class="form-group">

                            <label class="form-label">Password</label><span>*</span>
                            <input type="password" placeholder="Enter Password">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="form-group">

                            <label class="form-label">Confirm Password</label><span>*</span>
                            <input type="password" placeholder="Enter Confirm Password">
                        </div>
                        <p>Passwords must contain at least 8 or more characters with a mix of uppercase and lowercase letters,
                            numbers & symbols</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Second Modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Common Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="admin_1 admin_2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Deposit Amount</label><span>*</span>
                            <input type="text" placeholder="Enter Deposit Amount">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label"> Late Fee Amount</label><span>*</span>
                            <input type="text" placeholder="Enter Late Fee">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Airport Pickup Charge</label><span>*</span>
                            <input type="text" placeholder="Airport Pickup Charge">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Credit Card Charge (In Percentage)</label><span>*</span>
                            <input type="text" placeholder="Enter Credit Charge in percentage">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overlay Modal -->
<div class="overlay_1">
    <div class="md-modal md-effect-12">
        <div class="md-content">
            <h3>Delete</h3>
            <div>
                <p>Are you sure to continue?</p>
                <div class="my_modal1">
                    <ul>
                        <li><a href="javascript:void(0)">Yes</a></li>
                        <li><a href="javascript:void(0)" class="md-close">No</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
</div>
<!-- Overlay Modal End -->
