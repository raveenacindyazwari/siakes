<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <i class="icon fa fa-check"></i><?= $this->session->flashdata('success'); ?>
    </div>

<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <i class="icon fa fa-ban"></i><?= $this->session->flashdata('error'); ?>
    </div>
<?php } ?>