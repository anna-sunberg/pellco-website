<div class="col-md-8 col-md-offset-2">
    <div>
        <h1>Quick online order form</h1>
    </div>
    <form class="form-horizontal" id="orderForm" action="order">
        {{ csrf_field() }}
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputName" class="col-sm-4 control-label">Full name*</label>
                <div class="col-sm-8">
                    <input id="inputName" name="name" class="input-sm form-control" placeholder="Full name" tabindex="11" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputCity" class="col-sm-4 control-label">City</label>
                <div class="col-sm-8">
                    <input id="inputCity" name="city" class="input-sm form-control" placeholder="City" tabindex="13" />
                </div>
            </div>
            <!--    <div class="form-group">-->
            <!--      <label for="inputCountry" class="col-sm-4 control-label">Country</label>-->
            <!--      <div class="col-sm-8">-->
            <!--        <input id="inputCountry" name="country" class="input-sm form-control" placeholder="Country" tabindex="15" />-->
            <!--      </div>-->
            <!--    </div>-->
            <div class="form-group">
                <label for="inputPhone" class="col-sm-4 control-label">Phone*</label>
                <div class="col-sm-8">
                    <input id="inputPhone" name="phone" type="tel" class="input-sm form-control" placeholder="Phone" tabindex="17" />
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputEmail" class="col-sm-4 control-label">Email*</label>
                <div class="col-sm-8">
                    <input id="inputEmail" name="email" type="email" class="input-sm form-control" placeholder="Email" tabindex="12" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputStreet" class="col-sm-4 control-label">Street address</label>
                <div class="col-sm-8">
                    <input id="inputStreet" name="address" class="input-sm form-control" placeholder="Street address" tabindex="14" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputZip" class="col-sm-4 control-label">Zip code</label>
                <div class="col-sm-8">
                    <input id="inputZip" name="zip" class="input-sm form-control" placeholder="Zip code" tabindex="16" />
                </div>
            </div>
        </div>

        <div class="col-sm-12 separator"><!-- separator --></div>

        <div class="col-xs-6">
            <div class="form-group">
                <label for="selectItem" class="col-sm-4 control-label">Item*</label>
                <div class="col-sm-8">
                    <select id="selectItem" name="item" class="form-control">
                        @foreach($items as $item)
                            <option data-price="{{ $item->price }}" data-sample="{{ $item->free_sample }}" value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputAmount" class="col-sm-6 control-label">Amount*</label>
                <div class="col-sm-6">
                    <input type="number" name="amount" id="inputAmount" class="input-sm form-control" placeholder="Amount" value="1" />
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label class="col-sm-4 col-sm-offset-2 col-xs-12 control-label">Price</label>
                <label class="col-sm-6 control-label"><span id="price">0</span> €</label>
            </div>
        </div>

        <div class="col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="col-sm-2 control-label">Instructions</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="instructions"></textarea>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-offset-4">
            <button type="submit" class="btn btn-default">Order</button>
        </div>
    </form>
</div>