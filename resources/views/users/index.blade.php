@extends('layouts.app')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/chat.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
<main class="content">
    <div class="container p-0">

        <h1 class="h3 mb-3">Messages</h1>

        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-lg-5 col-xl-3 border-right">

                    <div class="px-4 d-none d-md-block">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <input type="text" class="form-control my-3" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                    @foreach($users as $user)
                    <a href="#" class="list-group-item list-group-item-action border-0">
{{--                        <div class="badge bg-success float-right">5</div>--}}
                        <div class="d-flex align-items-start">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                            <div class="flex-grow-1 ml-3">
                                {{ $user->name }}
                                <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                <input type="hidden" value="{{ $user->id}}" id="touserid">
                            </div>
                        </div>
                    </a>
                    @endforeach

                    <hr class="d-block d-lg-none mt-1 mb-0">
                </div>
                <div class="col-12 col-lg-7 col-xl-9">
                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                        <div class="d-flex align-items-center py-1">
                            <div class="position-relative">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                            </div>
                            <div class="flex-grow-1 pl-3">
                                {{-- @if(auth()->user()->id == 2) <span id="status"></span> @endif
                                @if(auth()->user()->id == 3) <span id="status2"></span> @endif --}}
                                <strong>@if(auth()->user()->id == 2) Ahmed @else Zeeshan @endif</strong>
{{--                                <div class="text-muted small"><em>Typing...</em></div>--}}
                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
                                <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="chat-messages p-4" id="mychat">

{{--                            <div class="chat-message-right pb-4">--}}
{{--                                <div>--}}
{{--                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">--}}
{{--                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">--}}
{{--                                    <div class="font-weight-bold mb-1">You</div>--}}
{{--                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        </div>

                        <div class="chat-messages p-4" id="mychat2">

{{--                            <div class="chat-message-right pb-4">--}}
{{--                                <div>--}}
{{--                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">--}}
{{--                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>--}}
{{--                                </div>--}}
{{--                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">--}}
{{--                                    <div class="font-weight-bold mb-1">You</div>--}}
{{--                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        </div>

                    </div>

                    <div class="flex-grow-0 py-3 px-4 border-top">
                        <div class="input-group">
                            <input type="text" class="form-control" id="txtmsg" placeholder="Type your message">
                            <button class="btn btn-primary" id="sendmsg">Send</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        let text='';

        getMessages();

        pushnote();

        // updateOnlineStatus();
    
        $('#txtmsg').on('keyup', function() {
            text = $(this).val();
        });

        $('#sendmsg').on('click', function() {
            $('#txtmsg').val('');
            $.ajax({
                url: "/send",
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    msg: text
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.state == 1) {
                        // $('.newmsgcont').text(data.data.content);
                        // getMessages(data.data.content);
                        // pushnote(data.data.id);
                    }
                    if (data.status === -1) {
                    }
                },
            });

        });
    });

    function updateOnlineStatus()
    {
        var user = {!! auth()->user() !!};
        if(user.id == 2 || user.id == 3) {
            $('#status').text('Online');
        }
   
    }


    function pushnote()
    {
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{env("MIX_PUSHER_APP_KEY")}}', {
            cluster: '{{env("PUSHER_APP_CLUSTER")}}',
            encrypted: true,
            
            
        });

        var channel = pusher.subscribe('test-channel');
        // var channel2 = pusher.subscribe('presence-check-online');
        // var channel = pusher.subscribe('private-test-channel');
        channel.bind('App\\Events\\NewMessage', function(data) {

            // console.log(data.message.content);
            // alert(data.message.content);
            // alert(data);
            // getLatestMessage(data.message.content);
            getLatestMessage(data);
        }); 

        // channel2.bind('online-event', function(data) {
        //     alert('Hi');
        //     // $('#status').text(data);    
        // });
    }

    function getLatestMessage(data)
    {
        if(data.message.from_user == {{auth()->user()->id}})
        {
            $('#mychat').append(`
                      <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    ${data.message.content}
                                </div>
                            </div>
        `);
        }
        else {
            $('#mychat').append(`
                      <div class="chat-message-right pb-4">
                                <div>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    ${data.message.content}
                                </div>
                            </div>
        `);
        }


    }

    function getMessages(text) {
        let touserid = $('#touserid').val();
        $.ajax({
            url: "/load-messages",
            type: "get",
            data: {
              id: touserid
            },
            success: function(response) {
            $('#mychat').html(response);

            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
    }

</script>
