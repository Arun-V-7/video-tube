@extends('Admin::layouts.master')
@section('title', 'Dashboard')

@section('head')

    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <style>
        .panel-heading{
            background: white;
            padding: 1%;
        }
        .panel-heading a {
            background: #66ddff;
            padding: 3px 15px;
            border-radius: 3px;
        }

        .btn-col{
            padding-top: 20px;
            text-align: right;
        }


        p {
            margin: 0;
        }
        .alert-danger{
            border: 2px solid red;
            border-radius: 3px;
            padding: 7px;
            width: 50%;
        }
        .alert-success {
            padding: 7px;
            border: 1px solid green;
            border-radius: 3px;
            width: 50%;
        }
        .col-md-12.form-rows {
            margin-top: 2%;
        }
        .input-box {
            width: 50%;
            border: none;
            border-bottom: 1px solid #80808063;
            outline: none;
        }
        button#submit-admission-form {
            background: #52b7ff;
            border: none;
            border-radius: 3px;
            color: white;
            padding: 5px 2%;
            margin-bottom: 5%;
        }
        .input-group.date {
            width: 50%;
        }
        textarea#address {
            height: 70px;
        }
		div#table_id_wrapper {
    overflow: scroll;
}
td {
    width: 160px;
    height: 15px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

    </style>

@endsection

@section('content')

    <div class="right-sidebar">
        <div class="nav-div">
            <div class="col-md-12 panel-heading">
                <div class="col-md-6">
                    <h3>Video panel</h3>
                </div>
                <div class="col-md-6 btn-col">
                    <a onclick="openModal('uploadVideo')">Upload Video</a>
                </div>

            </div>
            <div class="panel panel-default">
                <table id="table_id" class="display">
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="uploadVideo" role="dialog">
        <div class="modal-dialog">


            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Video</h4>
                </div>
                <div class="modal-body">

                    <form id="uploadVideoForm" class="panel-body">

					<div class="col-md-12 form-rows">
                            <div class="col-md-4">
                                <h4>Title</h4>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="title" class="input-box" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-md-12 form-rows">
                            <div class="col-md-4">
                                <h4>Description</h4>
                            </div>
                            <div class="col-md-8">
                                <textarea id="description" class="input-box" placeholder="" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 form-rows">
                            <div class="col-md-4">
                                <h4>Tumbnail</h4>
                            </div>
                            <div class="col-md-8">
                                <input type="file" id="tumbnail" class="input-box" placeholder="" required accept="image/*">
                            </div>
                        </div>

                        <div class="col-md-12 form-rows">
                            <div class="col-md-4">
                                <h4>Video</h4>
                            </div>
                            <div class="col-md-8">
                                <input type="file" id="video" class="input-box" placeholder="" required accept="video/*">
                            </div>
                        </div>
						
						<div class="col-md-12 form-rows">
                            <div class="col-md-4">
                                <h4>Watermark</h4>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="watermark" class="input-box" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-md-12 form-rows">
                            <div class="alert-danger hide">
                                <p id="error-message"></p>
                            </div>
                            <div class="alert-success hide">
                                <p id="success-message"></p>
                            </div>
                        </div>

                        <div class="col-md-12 form-rows align-right">
                            <div>
                                <button id="submit-quiz-question">Upload</button>
                                <img class="loading-gif hide" src="/assets/images/loding.gif">
                            </div>
                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



@endsection

@section('scripts')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script language="JavaScript"  src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
    $( ".side-menu" ).removeClass( "active" );
    $( ".dashboard" ).addClass( "active" );

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    var timeStamp = new Date($.now());
    let now = timeStamp.getFullYear()+"-"+(timeStamp.getMonth() + 1)+"-"+timeStamp.getDate()+" "+timeStamp.getHours()+":"+timeStamp.getMinutes()+":"+timeStamp.getSeconds();


    $('#table_id').DataTable( {
        serverSide: false,
        bProcessing: true,
        bServerSide: false,
        ajax: {
            url: '/admin/data-source',
            type: 'POST',
            dataSrc: 'data'
        },
        columns: [
            { title: 'Tile', data: 'title', "width": "20%" },
            { title: 'Description', data: 'description', "width": "20%" },
            { title: 'Tumbnail', data: 'tumbnail', "width": "20%" },
            { title: 'Video', data: 'video_path', "width": "20%" },
            { title: 'Watermark', data: 'watermark', "width": "20%" },
        ]
    } );

    function openModal(data) {
        $("#"+data).modal('show');
    }

    $(document).ready(function() {
        $("#uploadVideoForm").submit(function(e) {
            e.preventDefault();

           var tumbnail = $('#tumbnail')[0].files[0];
           var video = $('#video')[0].files[0];
            var formData = new FormData();
            formData.append('title', $('#title').val());
            formData.append('description', $('#description').val());
            formData.append('tumbnail', tumbnail);
            formData.append('video', video);
            formData.append('watermark', $('#watermark').val());
            formData.append('created_at', now);
            formData.append('updated_at', now);
            showLoader('loading-gif');
            $.ajax({
                url: '/admin/upload-video',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (data) {
                    hideLoader('loading-gif');
                    if (data.code == 200) {
                        $("#success-message").text(data.message);
                        $(".alert-success").removeClass('hide');
                        setTimeout(function() { window.location=window.location;},1000);
                    } else {
                        $("#error-message").text(data.message);
                        $(".alert-danger").removeClass('hide');
                    }
                }
            });
        })
    });
</script>
@endsection


