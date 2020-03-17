<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- USER DATA-->
                    <div class="user-data m-b-30">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-account-calendar"></i>Data Anggota</h3>
                        <div class="table-data__tool">
	                        <div class="table-data__tool-left pl-5 pr-5">
	                            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
	                                <select class="js-select2" name="property">
	                                    <option selected="selected">All Properties</option>
	                                    <option value="">Products</option>
	                                    <option value="">Services</option>
	                                </select>
	                                <div class="dropDownSelect2"></div>
	                            </div>
	                            <div class="rs-select2--dark rs-select2--sm rs-select2--border">
	                                <select class="js-select2 au-select-dark" name="time">
	                                    <option selected="selected">All Time</option>
	                                    <option value="">By Month</option>
	                                    <option value="">By Day</option>
	                                </select>
	                                <div class="dropDownSelect2"></div>
	                            </div>
	                        </div>
	                        <div class="table-data__tool-right pl-5 pr-5">
		                        <button class="btn btn-primary">
		                            <i class="zmdi zmdi-plus"></i> Add Member</button>
	                            <button class="btn btn-danger">
	                                <i class="zmdi zmdi-delete"></i> Delete All</button>
	                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
	                                <select class="js-select2" name="type">
	                                    <option selected="selected">Export</option>
	                                    <option value="">PDF</option>
	                                    <option value="">Excel</option>
	                                </select>
	                                <div class="dropDownSelect2"></div>
	                            </div>
	                        </div>
	                    </div>
                        <div class="table-responsive table-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>name</td>
                                        <td>role</td>
                                        <td>type</td>
                                        <td>action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role admin">admin</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">Full Control</option>
                                                    <option value="">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox" checked="checked">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role user">user</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option value="">Full Control</option>
                                                    <option value="" selected="selected">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role user">user</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option value="">Full Control</option>
                                                    <option value="" selected="selected">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="table-data__info">
                                                <h6>lori lynch</h6>
                                                <span>
                                                    <a href="#">johndoe@gmail.com</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="role member">member</span>
                                        </td>
                                        <td>
                                            <div class="rs-select2--trans rs-select2--sm">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">Full Control</option>
                                                    <option value="">Post</option>
                                                    <option value="">Watch</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="user-data__footer">
                            <button class="au-btn au-btn-load">load more</button>
                        </div>
                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>        	
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/anggota/anggota.blade.php ENDPATH**/ ?>