@extends('layouts.shipper')
@section('styles')
        .chat{
            max-height: 80%;
            overflow-y: scroll
        }
        .chat-messages {
            display: flex;
            flex-direction: column;
            max-height: 800px;
            overflow-y: scroll
        }

        .chat-message-left,
        .chat-message-right {
            display: flex;
            flex-shrink: 0
        }

        .chat-message-left {
            margin-right: auto
        }

        .chat-message-right {
            flex-direction: row-reverse;
            margin-left: auto
        }
        .py-3 {
            padding-top: 1rem!important;
            padding-bottom: 1rem!important;
        }
        .px-4 {
            padding-right: 1.5rem!important;
            padding-left: 1.5rem!important;
        }
        .flex-grow-0 {
            flex-grow: 0!important;
        }
        .border-top {
            border-top: 1px solid #dee2e6!important;
        }
@endsection
@section('content')

    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Messagerie</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li> <a class="icon-home" href="index.html">Tableau de bord</a></li>
                    <li><span>Messagerie</span></li>

                </ul>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="card chat">
        <div class="row g-0">
            <div class="col-12 col-lg-12 col-xl-12 col-md-12">
                <div class="py-2 px-4 border-bottom d-flex d-lg-block d-md-block d-sm-block">
                    <div class="d-flex align-items-center py-1">
                        <div class="position-relative">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                        </div>
                        <div class="flex-grow-1 pl-3">
                            <strong>Sharon Lessman</strong>
                            <div class="text-muted small"><em>Typing...</em></div>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="chat-messages p-4">
                        <div class="chat-message-right pb-4">
                            <div>
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                            </div>
                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                <div class="font-weight-bold mb-1">You</div>
                                Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                            </div>
                        </div>
                        <div class="chat-message-left pb-4">
                            <div>
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                            </div>
                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-0 py-3 px-4 border-top">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type your message">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
