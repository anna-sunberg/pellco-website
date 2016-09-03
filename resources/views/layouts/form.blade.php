<div class="col-md-8 col-md-offset-2">
    <div>
        <h1>Tilauslomake</h1>
    </div>
    <form class="form-horizontal" id="orderForm" action="order">
        {{--
            {{ csrf_field() }}
            disabled CSRF for this form
        --}}
        <div class="col-sm-6">
            <div class="col-sm-12">
                <div class="form-group">
                    <input id="inputName" name="name" class="input-sm form-control" placeholder="Etu- ja sukunimi" tabindex="11" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input id="inputCity" name="city" class="input-sm form-control" placeholder="Kaupunki" tabindex="13" />
                </div>
            </div>
            <!--    <div class="form-group">-->
            <!--      <label for="inputCountry" class="col-sm-4 control-label">Country</label>-->
            <!--      <div class="col-sm-8">-->
            <!--        <input id="inputCountry" name="country" class="input-sm form-control" placeholder="Country" tabindex="15" />-->
            <!--      </div>-->
            <!--    </div>-->
            <div class="col-sm-12">
                <div class="form-group">
                    <input id="inputPhone" name="phone" type="tel" class="input-sm form-control" placeholder="Puhelin" tabindex="16" />
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="col-sm-12">
                <div class="form-group">
                    <input id="inputEmail" name="email" type="email" class="input-sm form-control" placeholder="E-mail" tabindex="12" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input id="inputStreet" name="address" class="input-sm form-control" placeholder="Katuosoite" tabindex="14" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input id="inputZip" name="zip" class="input-sm form-control" placeholder="Postinumero" tabindex="17" />
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <div class="col-sm-6 col-xs-10">
                    <label for="inputAgree" class="control-label">Suostun henkilötietojeni käsittelyyn</label>
                </div>
                <div class="col-sm-6 col-xs-2">
                    <input type="checkbox" name="agree" tabindex="18" id="inputAgree" />
                </div>
            </div>
        </div>

        <div class="col-sm-12 separator"><!-- separator --></div>

        <div class="col-xs-12 product-row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="selectItem" class="col-sm-4 control-label">Tuote</label>
                    <div class="col-sm-8">
                        <select id="selectItem" name="item" class="form-control" tabindex="20">
                            @foreach($items as $item)
                                <option data-price="{{ $item->price }}" data-sample="{{ $item->free_sample }}" value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="inputAmount" class="col-sm-6 control-label">Määrä</label>
                    <div class="col-sm-6">
                        <input type="number" name="amount" id="inputAmount" class="input-sm form-control" placeholder="Määrä" value="1" tabindex="21" />
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label class="col-sm-4 col-sm-offset-2 col-xs-12 control-label">Hinta</label>
                    <label class="col-sm-6 control-label"><span id="price">0</span> €</label>
                </div>
            </div>
        </div>

        <div class="col-sm-12 separator"><!-- separator --></div>

        <div class="col-sm-4 col-xs-12">
            <button type="submit" class="btn btn-default" id="submitButton" tabindex="22">Tilaa</button>
        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="error-text">Ole hyvä ja täytä kaikki pakolliset kentät</div>
        </div>
    </form>
</div>