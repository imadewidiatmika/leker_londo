<div class="modal fade" id="dealModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document"> <!-- Increased size -->
        <div class="modal-content p-5" style="border-radius: 20px;">
            <div class="row g-0">
                <!-- Left Side: Image -->
                <div class="col-md-5 d-none d-md-flex align-items-center justify-content-center">
                    <img src="img/sales.jpg" class="img-fluid" style="max-width: 80%;" alt="Illustration">
                </div>

                <!-- Right Side: Form -->
                <div class="col-md-7">
                    <div class="modal-header border-0 text-center">
                        <h5 class="modal-title w-100 fw-bold text-uppercase" 
                        style="background-color: #fd1405; color: white; padding: 10px; border-radius: 5px; text-align: center;">
                        Klaim Voucher Gratis Semua Varian
                    </h5>
                    </div>
                    <span class="fw-light">Isi formulir di bawah ini untuk menjadi mitra dan dapatkan voucher gratis <center>semua varian Leker Londo</center></span>
                    <div class="modal-body">
                        <form action="{{ route('deals.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill px-3 bg-light border-0" 
                                    id="name" name="name" placeholder="Nama" required 
                                    style="background-color: #f4f4f4;" />
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control rounded-pill px-3 bg-light border-0" 
                                    id="email" name="email" placeholder="Email" 
                                    style="background-color: #f4f4f4;" />
                                @error('email')
                                    <span class="text-danger d-block small mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill px-3 bg-light border-0" 
                                    id="nowa" name="nowa" placeholder="No WhatsApp" 
                                    style="background-color: #f4f4f4;" />
                                @error('nowa')
                                    <span class="text-danger d-block small mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select class="form-control rounded-pill px-3 bg-light border-0" 
                                    id="province" name="province_id" required 
                                    style="background-color: #f4f4f4;">
                                    <option value="">Pilih Provinsi</option>
                                </select>
                                <input type="hidden" id="province_name" name="province_name">
                            </div>
                            <div class="mb-3">
                                <select class="form-control rounded-pill px-3 bg-light border-0" 
                                    id="city" name="city_id" required 
                                    style="background-color: #f4f4f4;">
                                    <option value="">Pilih Kabupaten/Kota</option>
                                </select>
                                <input type="hidden" id="city_name" name="city_name">
                            </div>
                            <button type="submit" class="btn w-100 py-2 mt-4 text-primary" 
                                style="background-color: #682f0c; border-radius: 20px;">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
</div>
