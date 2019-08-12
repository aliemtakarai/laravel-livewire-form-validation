<div>
        <div wire:loading>
            Processing
        </div>
        <input type="text" wire:model.lazy="name" placeholder="Please input your name">
        @if($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
        @endif
        <input type="date" wire:model.lazy="birth">
        @if($errors->has('birth'))
            <span>{{ $errors->first('birth') }}</span>
        @endif
        <input type="text" wire:model.lazy="city">
        @if($errors->has('city'))
            <span>{{ $errors->first('city') }}</span>
        @endif
        <button type="button" wire:click="loginForm" type="button" >Submit</button>
        <br>
        Name : {{ $name }}<br>
        Birth : {{ date('d-m-Y', strtotime($birth)) }}<br>
        City : {{ $city }}
</div>
