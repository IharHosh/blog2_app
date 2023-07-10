<x-form action="{{route('blog.index')}}" method="get">

    <div class="row">
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="search" value="{{ request()->input('search') }}" placeholder="{{__('Поиск по названию')}}"/>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="from_date" value="{{ request()->input('from_date') }}" placeholder="{{__('Дата начала')}}"/>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="to_date" value="{{ request()->input('to_date') }}" placeholder="{{__('Дата окончания')}}"/>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="tag" value="{{ request()->input('tag') }}" placeholder="{{__('Поиск по тегу')}}"/>
            </div>
        </div>

{{--        <div class="col-12 col-md-4">--}}
{{--            <div class="mb-3">--}}
{{--                <x-select name="category_id" value="{{ request('category_id') }}" :options="$categories" />--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-button type="submit" class="w-100">
                    {{__('применить')}}
                </x-button>
            </div>
        </div>
    </div>
</x-form>
