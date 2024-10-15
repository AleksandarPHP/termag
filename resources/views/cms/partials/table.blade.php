<div class="popis-robe">
  <div class="invoice-table">
      <table class="w-100">
          <thead>
              <tr>
                  <th scope="col" >
                      <b>{{__('Title')}}</b>
                  </th>
                  <th scope="col">
                      <b>{{__('Price')}}</b>
                  </th>
                  <th
                      scope="col"
                  >
                      <b>{{__('Quantity')}}</b>
                  </th>
                  <th
                      scope="col"
                      width="60"
                      style="text-align: center"
                  >
                      <b>PDV(%)</b>
                  </th>
                  <th
                      scope="col"
                      style="text-align: center"
                  >
                      <b>{{__('Delete')}}</b>
                  </th>
              </tr>
              @php
                  $list = session()->get('table_item');
              @endphp
              @if ($list)
                @foreach ($list as $key => $item)
                <tr>
                  <td class="text-center" scope="col">{{$item['name']}}</td>
                  <td class="text-center" scope="col">{{$item['price']}}</td>
                  <td class="text-center" scope="col">{{$item['quantity']}}</td>
                  <td class="text-center" scope="col">{{$item['unit_measurement']}}</td>
                  <td class="text-center"><i class="fa-solid fa-trash" data-row-id="{{$key}}" style="cursor: pointer; color: #0b3663;"></i></td>
                </tr>
                @endforeach
              @else
                  <tr>
                    <td class="text-center" colspan="5"> {{__('Services not listed')}} </td>
                  </tr>
              @endif
          </thead>
      </table>
  </div>
</div>
<input type="hidden" name="hidden_data" id="hidden_data">
<input class="input_hidden" name="suma" type="text" id="suma">