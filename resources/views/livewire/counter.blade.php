<div style="text-align: center">
    <h1>
        My Simple Counter
    </h1>
    <pre>Count of clicks: {{ $count }}</pre>

    <div>
        <button wire:click="increment">Increment</button>
        <button wire:click="decrement">Decrement</button>
    </div>
</div>
