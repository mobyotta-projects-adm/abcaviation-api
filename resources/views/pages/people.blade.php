<x-app-layout>
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>People card</h5>
                </div>
                <div class="card-body">
                  
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th> Name</th>
                              <th>Contact</th>
                              <th>Orders</th>
                              <th>Spent</th>
                              <th>Role</th>
                              <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>179</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-1.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Addie Bass</h6>
                                    <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>45</td>
                              <td>$7,634 </td>
                              <td><span class="badge bg-light-success rounded-pill f-12">Safety Manager</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>60</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-2.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Agnes McGee</h6>
                                    <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>42</td>
                              <td>$3,742</td>
                              <td><span class="badge bg-light-primary rounded-pill f-12">Process Technician</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>133</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-3.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Alberta Robbins</h6>
                                    <p class="text-muted f-12 mb-0">miza@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>20</td>
                              <td>$885</td>
                              <td><span class="badge bg-light-danger rounded-pill f-12">Packaging Engineer</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>60</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-4.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Agnes McGee</h6>
                                    <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>42</td>
                              <td>$3,742</td>
                              <td><span class="badge bg-light-primary rounded-pill f-12">Process Technician</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>60</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-5.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Agnes McGee</h6>
                                    <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>42</td>
                              <td>$3,742</td>
                              <td><span class="badge bg-light-primary rounded-pill f-12">Process Technician</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>179</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-6.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Addie Bass</h6>
                                    <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>45</td>
                              <td>$7,634 </td>
                              <td><span class="badge bg-light-success rounded-pill f-12">Safety Manager</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>60</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-7.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Agnes McGee</h6>
                                    <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>42</td>
                              <td>$3,742</td>
                              <td><span class="badge bg-light-primary rounded-pill f-12">Process Technician</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>133</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-8.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Alberta Robbins</h6>
                                    <p class="text-muted f-12 mb-0">miza@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>20</td>
                              <td>$885</td>
                              <td><span class="badge bg-light-danger rounded-pill f-12">Packaging Engineer</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td>60</td>
                              <td>
                                <div class="row">
                                  <div class="col-auto pe-0">
                                    <img src="<?= asset('assets/images/user/avatar-9.jpg') ?>" alt="user-image"
                                      class="wid-40 rounded-circle">
                                  </div>
                                  <div class="col">
                                    <h6 class="mb-0">Agnes McGee</h6>
                                    <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                  </div>
                                </div>
                              </td>
                              <td>+1 (247) 849-6968</td>
                              <td>42</td>
                              <td>$3,742</td>
                              <td><span class="badge bg-light-primary rounded-pill f-12">Process Technician</span> </td>
                              <td class="text-center">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-modal">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                      data-bs-target="#customer-edit_add-modal">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>

</x-app-layout>
