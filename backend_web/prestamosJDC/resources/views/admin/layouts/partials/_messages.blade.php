            @if (count($errors) > 0)
                <div id="clear-fgs-message" class="card-panel red darken-3">
                    <ul class="white-text">
                        <a onclick="closeErrorMessage()" href="" class="secondary-content clear-fgs-message"><i class="material-icons">clear</i></a>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('session_msg') )
                <div id="session_msg" class="card-panel teal">
                    <span  class="white-text">{{ session('session_msg') }}</span>
                </div>
            @endif