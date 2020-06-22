@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="form-group">
                            <select v-for="categories, level in categoriesPerLevel"
                                    @change="categorySelected($event,level+1)"
                                    class="form-control">
                                <option
                                ></option>
                                <option
                                    v-for="category in categories"
                                    :value="category.id">@{{category.name}}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

