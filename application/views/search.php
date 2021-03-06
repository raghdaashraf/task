
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url('includes/css/fresh-bootstrap-table.css'); ?>" rel="stylesheet" />

<style>
    h4 {font-size:18px}

</style>

<div id="page-content-wrapper">




    <div class="container-fluid">

        <div class="col-md-12">

            <div class="contain_form">

                <h4><i class="fa fa-user" aria-hidden="true"></i> Search </h4>

                <div class="container-fluid">	 

                    <?php echo form_open('welcome/index', array('class' => 'form-horizontal')); ?>
                    <div class="col-md-12">



                        <div class="form-group">
                            <label class="col-md-1 control-label">Hotel Name</label>
                            <div class="col-md-2">
                                <input type="text" name="hotelName" class="form-control search_input">
                            </div>

                            <label class="col-md-1 control-label">City</label>
                            <div class="col-md-2">
                                <select name="city" class="form-control search_input">
                                    <option> </option>
                                    <option value="cairo"> Cairo</option>
                                    <option value="dubai"> Dubai</option>
                                    <option value="london"> London</option>
                                    <option value="paris"> Paris</option>
                                    <option value="Vienna"> Vienna</option>
                                    <option value="Manila"> Manila</option>
                                    <option value="U.S.A"> U.S.A</option>
                                </select>
                            </div>

                            <label class="col-md-1 control-label">Price range</label>
                            <div class="col-md-2">
                                <input type="text" name="price" class="form-control search_input">
                            </div>


                        </div>
                        <div class="form-group">
                            <label class="col-md-1 control-label">From</label>
                            <div class="col-md-2">
                                <input type="text" name="dateFrom" class=" datepicker form-control">
                            </div>


                            <label class="col-md-1 control-label">To</label>
                            <div class="col-md-2">
                                <input type="text" name="dateTo" class="datepicker form-control">
                            </div>
                        </div>


                        <div class="form-group" >
                            <div class="btn_cont">
                                <button type="submit" class="btn-sol">Search</button>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close(); ?> 
                </div>
                <?php if ($result) {
                    ?>
                    <div class="fresh-table" style="margin-top:50px !important">

                        <table id="fresh-table" class="table">
                            <thead>
                            <th data-field="id" data-sortable="true">#</th>
                            <th data-field="name" data-sortable="true">hotel Name</th>
                            <th data-field="username" data-sortable="true">City</th>
                            <th data-field="email" data-sortable="true">Price</th>
                            <th data-field="branch" data-sortable="true">availability</th>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                foreach ($result as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $value['name']; ?></td>
                                        <td><?php echo $value['city']; ?></td>
                                        <td><?php echo $value['price']; ?></td>
                                        <td><?php
                                            foreach ($value['availability'] as $key2 => $value2) {
                                                echo $value2['from'] . "=>" . $value2['from'] . "<br/>";
                                            }
                                            ?></td>
                                    </tr>
                                    <?php $count++;
                                } ?>

                            </tbody>
                        </table>
                    </div>
<?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>




<!-- DataTable Scripts-->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url('includes/js/bootstrap-table.js'); ?>"></script>

<script type="text/javascript">
    var $table = $('#fresh-table'),
            full_screen = false;

    $().ready(function () {
        $table.bootstrapTable({
            search: true,
            showColumns: true,
            pagination: true,
            striped: true,
            pageSize: 5,
            pageList: [5, 10, 25, 50, 100],

            formatShowingRows: function (pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..." 
            },
            formatRecordsPerPage: function (pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });



        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });


        window.operateEvents = {

            'click .edit': function (e, value, row, index) {
                alert('You click edit icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .remove': function (e, value, row, index) {
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });

            }
        };


    });

</script>

<script>
    $(document).ready(function () {
        var table = $('#fresh-table').DataTable();

        $('#fresh-table tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


    });
</script>
<!-- End DataTable Scripts-->
