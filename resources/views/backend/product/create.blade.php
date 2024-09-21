@extends('backend/layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>New Product</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('product.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    Product</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('product.store') }}" encproduct="multipart/form-data" class="row g-3 p-3">
                @csrf

                <div class="col-md-6 pb-3">
                    <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="amount" name="name" value="{{ old('name') }}"
                        required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 pb-3">
                    <label for="type_id" class="form-label">Brand<span class="text-danger">*</span></label>
                    <select id="type_id" name="type_id" class="form-select" required>
                        <option selected disabled>Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>                   
                    @error('type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 pb-3">
                    <label for="modele_id" class="form-label">Model<span class="text-danger">*</span></label>
                    <select id="modele_id" name="modele_id" class="form-select" required>
                        <option selected disabled>Select One</option>
                        @foreach ($modeles as $modele)
                            <option value="{{ $modele->id }}">{{ $modele->name }}</option>
                        @endforeach
                    </select>                    
                    @error('modele_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="col-md-3 pb-3">
                    <label for="type_id" class="form-label">Type<span class="text-danger">*</span></label>
                    <select id="type_id" name="type_id" class="form-select" required>
                        <option selected disabled>Select One</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 pb-3">
                    <label for="size_id" class="form-label">Size<span class="text-danger">*</span></label>
                    <select id="size_id" name="size_id" class="form-select" required>
                        <option selected disabled>Select One</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>                    
                    @error('size_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 pb-3">
                    <label for="color_id" class="form-label">Color<span class="text-danger">*</span></label>
                    <select id="color_id" name="color_id" class="form-select" required>
                        <option selected disabled>Select One</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach
                    </select>                    
                    @error('color_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 pb-3">
                    <label for="certification_id" class="form-label">Certification<span class="text-danger">*</span></label>
                    <select id="certification_id" name="certification_id" class="form-select" required>
                        <option selected disabled>Select One</option>
                        @foreach ($certifications as $certification)
                            <option value="{{ $certification->id }}">{{ $certification->name }}</option>
                        @endforeach
                    </select>                    
                    @error('certification_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 pb-3">
                    <label for="purchase_price" class="form-label">Purchase Price<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="purchase_price" name="purchase_price" value="{{ old('purchase_price') }}"
                        required>
                    @error('purchase_price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="col-md-3 pb-3">
                    <label for="wholesale_price" class="form-label">Wholesale Price<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="wholesale_price" name="wholesale_price" value="{{ old('wholesale_price') }}"
                        required>
                    @error('wholesale_price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 pb-3">
                    <label for="retail_price" class="form-label">Retail Price<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="retail_price" name="retail_price" value="{{ old('retail_price') }}"
                        required>
                    @error('retail_price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 pb-3">
                    <label for="stock_qty" class="form-label">Stock QTY<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="stock_qty" name="stock_qty" value="{{ old('stock_qty') }}"
                        required>
                    @error('stock_qty')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 pb-3">
                    <label for="vat" class="form-label">Vat<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="vat" name="vat" value="{{ old('vat') }}"
                        required>
                    @error('vat')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 pb-3">
                    <label for="tax" class="form-label">Tax<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="tax" name="tax" value="{{ old('tax') }}"
                        required>
                    @error('tax')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 pb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="desc" style="height: 100px"></textarea>
                    @error('desc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection