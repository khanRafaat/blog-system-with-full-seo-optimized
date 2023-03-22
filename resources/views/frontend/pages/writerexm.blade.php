@extends('frontend/layout/app')
@section('seo')
    <title>Content Writer Quality Test</title>
@endsection

@section('frontbody')



    @if ($tempWriterInfos->exam == 0)
        <form id="exmform" action="{{ url('exam-store/' . $tempWriterInfos->id) }}" method="POST">
            @csrf
            <div class="container" style="margin-top:8%">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header text-center" style="font-size: 20px;font-weight:600">
                                Content Writer Quality Test
                            </div>
                            <div class="card-body">
                                <div class=" d-flex justify-content-center">
                                    <div style="width: 20%" class="text-center">
                                        <b>Name: </b>{{ $tempWriterInfos->fname }} {{ $tempWriterInfos->lname }}<br>
                                        <b>Email: </b>{{ $tempWriterInfos->email }}<br>
                                        <b>Phone: </b>{{ $tempWriterInfos->phone }}<br>
                                    </div>
                                </div>
                                <div style="font-size: 18px;margin-top:5px" class="text-center"><b>Total Time :</b> 60
                                    Minutes</div>
                                <div style="font-size: 18px;margin-top:5px" class="text-center"><b>Time :</b> <span
                                        id="time"></span> <span
                                        style="font-size: 18px;margin-top:5px;color:red;display:none" class="text-center"
                                        id="timerLate"><b>** LATE **</b></span>
                                </div>

                                <hr>

                                <div class="d-flex justify-content-center">
                                    <div style="width: 70%">

                                        <b>No 1: Where do you like to see yourself in next 5 years? (Give the answer within
                                            5
                                            line)</b><br><br>

                                        <b>No 2: Why you want to be a professional Content Writer?</b><br><br>

                                        <b>No 3: Assume that you are an alien and live in a distant galaxy. Your physical
                                            features are not like any human or animal on earth. Today, you landed your
                                            spaceship
                                            on the planet called "Earth". The first being you see is a "Cow". Please
                                            describe
                                            the animal in English. (Answer should be explanatory within 15
                                            line).</b><br><br>

                                        <b>No 4: How can you benefit a company with the skill you have?</b><br><br>

                                        <h6 style="margin-top: 40px;margin-bottom:20px">Writer Your Answer</h6>
                                        <textarea class="ckeditor form-control" name="answer" id="answer" cols="30" rows="10">
                                  </textarea>
                                        <input type="hidden" name="timespend" id="inputTimwe" value="">
                                    </div>


                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-success btn-large answerSubmit text-center">Submit
                                        Answer</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <div class="container" style="margin-top:8%">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">

                            <div style="height: 100px" class="text-center">
                                @if (session()->has('sucess'))
                                    <div class="alert alert-success text-center">
                                        {{ session()->get('sucess') }}
                                    </div>
                                @endif
                                <h4>You have submited Your Answer, Thanks</h4>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection
@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

<script>

 ClassicEditor
        .create( document.querySelector( '#answer' ),{
            ckfinder: {
                uploadUrl: '{{route('upload').'?_token='.csrf_token()}}',
              
    },
    
    
        })
        .catch( error => {
            console.error( error );
        } );
        
</script>

    <script>
        $('#exmform').on('submit', function() {
            localStorage.removeItem('seconds');
            localStorage.removeItem('minutes');
            return true;
        });

        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + " min " + seconds + " sec.";
                document.getElementById("inputTimwe").value = minutes + " min " + seconds + " sec.";

                if (minutes >= 61) {
                    document.getElementById("timerLate").style.display = "block";
                }
                if (++timer < 0) {
                    // timer = duration;
                }

                window.localStorage.setItem("seconds", seconds)
                window.localStorage.setItem("minutes", minutes)
            }, 1000);
        }
        window.onload = function() {
            sec = parseInt(window.localStorage.getItem("seconds"))
            min = parseInt(window.localStorage.getItem("minutes"))

            if (parseInt(min * sec)) {
                var fiveMinutes = (parseInt(min * 60) + sec);
            } else {
                var fiveMinutes = 00 * 00;
            }
            display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>
@endsection
