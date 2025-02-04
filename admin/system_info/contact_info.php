<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<style>
    .content {
        background: linear-gradient(135deg, #f0f0f0 0%, #d8d8d8 100%);
        color: #333;
        padding: 40px 20px;
        border-radius: 20px 20px 0 0;
        text-align: center;
        margin-bottom: 30px;
        animation: slideInUp 1s ease-in-out;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(-100%);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .card-footer {
        background: #f0f0f0;
        border-top: 1px solid #ddd;
        border-radius: 0 0 20px 20px;
    }

    .btn-primary {
        background: #666;
        border-color: #666;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background: #333;
        border-color: #333;
    }

    .form-control {
        border: 1px solid #ddd;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #666;
        box-shadow: none;
    }

    .form-group label {
        color: #666;
    }

    .form-group input, .form-group textarea {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="content py-5 px-3">
	<h2><b>Contact Information</b></h2>
</div>
<div class="row mt-lg-n4 mt-md-n4 justify-content-center">
	<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
        <div class="card rounded shadow">
            <div class="card-body">
                <form action="" id="system-frm">
                    <div id="msg" class="form-group"></div>
                   
                    <div class="form-group">
                        <label for="mobile" class="control-label">Mobile #</label>
                        <input type="text" class="form-control form-control-sm rounded" name="mobile" id="mobile" value="<?php echo $_settings->info('mobile') ?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" class="form-control form-control-sm rounded" name="email" id="email" value="<?php echo $_settings->info('email') ?>">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Address</label>
                        <textarea row="3" class="form-control form-control-sm rounded" name="address" id="address"><?php echo $_settings->info('address') ?></textarea>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <button class="btn btn-sm btn-primary" form="system-frm">Update Information</button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<script>
</script>
