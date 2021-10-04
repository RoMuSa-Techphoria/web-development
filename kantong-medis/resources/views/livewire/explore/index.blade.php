<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <input class="form-control" type="search" placeholder="Search">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-weight: 600;">Filter Pencarian Anda</li>
                    <li class="list-group-item">
                        <div class="mb-2">Kategori</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="medicine">
                            <label class="form-check-label" for="medicine">
                                Obat-obatan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="vaccine">
                            <label class="form-check-label" for="vaccine">
                                Vaksin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="test">
                            <label class="form-check-label" for="test">
                                Covid-19 Test
                            </label>
                        </div>
                        <hr style="margin: 10px 0; color: #9e9e9e;">
                        <div class="mb-2">Jenis Obat</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="azithromycin">
                            <label class="form-check-label" for="azithromycin">
                                Azithromycin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="favipiravir">
                            <label class="form-check-label" for="favipiravir">
                                Favipiravir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="immunoglobulin">
                            <label class="form-check-label" for="immunoglobulin">
                                Immunoglobulin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ivermectin">
                            <label class="form-check-label" for="ivermectin">
                                Ivermectin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="multivitamin">
                            <label class="form-check-label" for="multivitamin">
                                Multivitamin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="oseltamivir">
                            <label class="form-check-label" for="oseltamivir">
                                Oseltamivir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remdesivir">
                            <label class="form-check-label" for="remdesivir">
                                Remdesivir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="tocilizumab">
                            <label class="form-check-label" for="tocilizumab">
                                Tocilizumab
                            </label>
                        </div>
                        <hr style="margin: 10px 0; color: #9e9e9e;">
                        <div class="mb-2">Partner Kami</div>
                        <select class="form-select mb-2">
                            <option selected>K-24</option>
                            <option>Kimia Farma</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-9">
            <div class="row explore">
                @foreach ($services as $row)
                    <div class="col-lg-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-2">
                                        <img src="{{ asset('storage/' . $row->partner->image) }}" alt=""
                                            style="width: 100%" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5 card-title">{{ $row->name }}</span>
                                        <br>
                                        <span
                                            class="card-subtitle text-primary">{{ $row->category->service_name }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text">Stok : {{ $row->stock }}</p>
                                        <p class="card-text">
                                            <i class="bi bi-house-door text-secondary"></i> {{ $row->partner->name }}
                                            <br>
                                            <i class="bi bi-geo-alt text-secondary"></i> {{ $row->partner->address }}
                                            <br>
                                            <i class="bi bi-phone text-secondary"></i> {{ $row->partner->phone }}
                                        </p>
                                        <p class="card-text text-danger fs-6 fst-italic">*{{ $row->note }}</p>
                                        <a href="{{ $row->partner->map }}" class="btn btn-outline-danger">
                                            <i class="bi bi-map"></i> Map
                                        </a>
                                        <a href=" https://wa.me/{{ $row->partner->phone }}"
                                            class="btn btn-outline-success">
                                            <i class="bi bi-whatsapp"></i> Whatsapp
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted bg-white">
                                {{ $row->updated_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
