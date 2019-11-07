<div id="fh5co-search-map">
    <div class="search-property">
        <div class="s-holder">
            <h2>Search House</h2>
            <div class="row">
                <form role="search" method="get" action="{{route('shop.checkSearch')}}">
                    @csrf
                    <div class="col-xxs-12 col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                        <div class="input-field">
                            <label for="from">Keyword:</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="Nhập tên ..."/>
                            @if($errors->has('name'))
                                <span class="help-block">
                                    {{$errors->first('name')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xxs-12 col-xs-12 {{$errors->has('status') ? 'has-error' : ''}}">
                        <section>
                            <label for="class">Property Status:</label>
                            <select class="cs-select cs-skin-border"
                                    name="status">
                                <option disabled selected>Trạng thái</option>

                                <option value="{{Config::get('constants.DA_BAN')}}">Đã bán</option>
                                <option value="{{Config::get('constants.CON_HANG')}}">Đang bán</option>

                            </select>
                            @if($errors->has('status'))
                                <span class="help-block">
                                    {{$errors->first('status')}}
                                </span>
                            @endif
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12 {{$errors->has('type_id') ? 'has-error' : ''}}">
                        <section>
                            <label for="class">House Type:</label>
                            <select class="cs-select cs-skin-border input-half"
                                    name="type_id">
                                <option disabled selected>Kiểu biệt thự</option>
                                <option value="1">Biệt thự mùa xuân</option>
                                <option value="2">Biệt thự mùa hạ</option>
                                <option value="3">Biệt thự mùa thu</option>
                                <option value="4">Biệt thự mua đông</option>
                            </select>
                            @if($errors->has('type_id'))
                                <span class="help-block">
                                    {{$errors->first('type_id')}}
                                </span>
                            @endif
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Price:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border {{$errors->has('fromPrice') ? 'has-error' : ''}}"
                                        name="fromPrice">
                                    <option disabled selected>Từ:</option>
                                    @for($i = 1500000; $i <= 4000000; $i+=500000)
                                        <option value="{{$i}}">{{$i}} $</option>
                                    @endfor
                                </select>
                                @if($errors->has('fromPrice'))
                                    <span class="help-block">
                                    {{$errors->first('fromPrice')}}
                                </span>
                                @endif
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('toPrice') ? 'has-error' : ''}}"
                                        name="toPrice">
                                    <option disabled selected>Đến:</option>
                                    @for($i = 1500000; $i <= 4000000; $i+=500000)
                                        <option value="{{$i}}">{{$i}} $</option>
                                    @endfor
                                </select>
                                @if($errors->has('toPrice'))
                                    <span class="help-block">
                                    {{$errors->first('toPrice')}}
                                </span>
                                @endif
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Bedrooms:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('fromBedroom') ? 'has-error' : ''}}"
                                        name="fromBedroom">
                                    <option disabled selected>Từ:</option>
                                    @for($i = 3; $i <= 8; $i++)
                                        <option value="{{$i}}">{{$i}} Phòng ngủ</option>
                                    @endfor
                                </select>
                                @if($errors->has('fromBedroom'))
                                    <span class="help-block">
                                    {{$errors->first('fromBedroom')}}
                                </span>
                                @endif
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('toBedroom') ? 'has-error' : ''}}"
                                        name="toBedroom">
                                    <option disabled selected>Đến:</option>
                                    @for($i = 3; $i <= 8; $i++)
                                        <option value="{{$i}}">{{$i}} Phòng ngủ</option>
                                    @endfor
                                </select>
                                @if($errors->has('toBedroom'))
                                    <span class="help-block">
                                    {{$errors->first('toBedroom')}}
                                </span>
                                @endif
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Bathrooms:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('fromBathroom') ? 'has-error' : ''}}"
                                        name="fromBathroom">
                                    <option disabled selected>Từ:</option>
                                    @for($i = 3; $i <= 9; $i++)
                                        <option value="{{$i}}">{{$i}} Phòng tắm</option>
                                    @endfor
                                </select>
                                @if($errors->has('fromBathroom'))
                                    <span class="help-block">
                                    {{$errors->first('fromBathroom')}}
                                </span>
                                @endif
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('toBathroom') ? 'has-error' : ''}}"
                                        name="toBathroom">
                                    <option disabled selected>Đến:</option>
                                    @for($i = 3; $i <= 9; $i++)
                                        <option value="{{$i}}">{{$i}} Phòng tắm</option>
                                    @endfor
                                </select>
                                @if($errors->has('toBathroom'))
                                    <span class="help-block">
                                    {{$errors->first('toBathroom')}}
                                </span>
                                @endif
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12">
                        <section>
                            <label for="class">Area:</label>
                            <div class="wide">
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('fromArea') ? 'has-error' : ''}}"
                                        name="fromArea">
                                    <option disabled selected>Từ:</option>
                                    @for($i = 200; $i <= 700; $i+=100)
                                        <option value="{{$i}}">{{$i}} m2</option>
                                    @endfor
                                </select>
                                @if($errors->has('fromArea'))
                                    <span class="help-block">
                                    {{$errors->first('fromArea')}}
                                </span>
                                @endif
                                <select class="cs-select cs-select-half cs-skin-border input-half {{$errors->has('toArea') ? 'has-error' : ''}}"
                                        name="toArea">
                                    <option disabled selected>Đến:</option>
                                    @for($i = 200; $i <= 700; $i+=100)
                                        <option value="{{$i}}">{{$i}} m2</option>
                                    @endfor
                                </select>
                                @if($errors->has('toArea'))
                                    <span class="help-block">
                                    {{$errors->first('toArea')}}
                                </span>
                                @endif
                            </div>
                        </section>
                    </div>
                    <div class="col-xxs-12 col-xs-12 text-center">
                        <p>>
                            <button class="btn btn-primary btn-lg">Search</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="map" style="background-image: url({{asset('storage/images/backgroup.jpg')}});">
    </div>
</div>
