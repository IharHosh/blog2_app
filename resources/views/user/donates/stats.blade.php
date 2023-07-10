@foreach($statistics as $stats)

    <h6>
        {{ __('Статистика для :currency', ['currency' => $stats->currency_id]) }}
    </h6>


    <div class="row mb-3">
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Количество донатов.
                    </div>

                    {{-- <h5 class="m-0">{{ $stats->total_count }}</h5> --}}{{-- обрращение как к объекту модели --}}

                    {{--                <h5 class="m-0">
                    {{ $stats['total_count'] }}
                    </h5>--}} {{-- обр. как к массиву модели --}}

                    <h5 class="m-0">{{ $stats->total_count }}</h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Общая сумма донатов.
                    </div>
                    <h5 class="m-0">{{ __money($stats->total_amount, $stats->currency_id) }}</h5>
{{--                    <h5 class="m-0">{{ __money('$stats->total_count',  ) }}</h5>--}}
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Средняя сумма доната.
                    </div>

                    <h5 class="m-0">{{ __money($stats->avg_amount, $stats->currency_id) }}</h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Минимальная сумма доната.
                    </div>

                    <h5 class="m-0">{{ __money($stats->min_amount, $stats->currency_id) }}</h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Максимальная сумма доната.
                    </div>

                    <h5 class="m-0">{{ __money($stats->max_amount, $stats->currency_id) }}</h5>
                </x-card-body>
            </x-card>
        </div>
    </div>

@endforeach





