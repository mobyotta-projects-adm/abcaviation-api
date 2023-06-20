<x-app-layout>


    <div class="col-sm-12">


        <div class="row">

            <div class="col-lg-4 col-xxl-3">

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>News Feed</h5>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="d-flex align-items-center text-muted text-hover-primary mb-2"
                                    href="https://phoenixcoded.net/" target="_blank">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16">quickreply</i>
                                    </div>
                                    <span class="text-truncate w-100">All Posts</span>
                                </a>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16">sms_failed</i>
                                    </div>
                                    <span class="text-truncate w-100">Important Posts</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16"><span
                                                class="material-symbols-outlined">mark_chat_read</span></i>
                                    </div>
                                    <span class="text-truncate w-100">Your Posts</span>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Locations</h5>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                            <i class="material-icons-two-tone text-secondary f-16">search</i>
                        </div>
                        <input class="co-input__inner" type="text" autocomplete="off" tabindex="" aria-label=""
                            inputmode="" placeholder="Search">


                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="d-flex align-items-center text-muted text-hover-primary mb-2"
                                    href="https://phoenixcoded.net/" target="_blank">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16">location_on</i>
                                    </div>
                                    <span class="text-truncate w-100">Terminal 1</span>
                                </a>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16">location_on</i>
                                    </div>
                                    <span class="text-truncate w-100">Terminal 2</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16"><span
                                                class="material-symbols-outlined">location_on</span></i>
                                    </div>
                                    <span class="text-truncate w-100">Area 56</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16"><span
                                                class="material-symbols-outlined">location_on</span></i>
                                    </div>
                                    <span class="text-truncate w-100">Area 56</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16"><span
                                                class="material-symbols-outlined">location_on</span></i>
                                    </div>
                                    <span class="text-truncate w-100">Area 56</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center text-muted mb-2">
                                    <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                                        <i class="material-icons-two-tone text-secondary f-16"><span
                                                class="material-symbols-outlined">location_on</span></i>
                                    </div>
                                    <span class="text-truncate w-100">Area 56</span>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>

            <div class="col-lg-8 col-xxl-9">
                <div class="tab-content">
                    <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="#profile-tab">

                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-start">
                                    <div class="chat-avtar flex-shrink-0">
                                        <img class="rounded-circle img-fluid wid-40" src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <div class="bg-success chat-badge"></div>
                                    </div>
                                    <div class="media-body ms-3">
                                        <h5 class="mb-0">John Doe</h5>
                                        <span class="text-sm text-muted">Senior Manager (GST)</span>
                                    </div>
                                </div>
                                <textarea class="form-control border-0 shadow-none" placeholder="What’s new, Stebin?" rows="1"></textarea>
                                <div class="row align-items-center mt-3">
                                    <div class="col">
                                        <ul class="list-inline ms-auto mb-0">
                                            <li class="list-inline-item border-end pe-2 me-2">
                                                <a href="#" class="avtar avtar-s btn-link-warning">
                                                    <i class="ti ti-mood-smile f-18"></i>
                                                </a>
                                            </li>
                                            {{-- <li class="list-inline-item">
                                                <a href="#" class="avtar avtar-s btn-link-secondary">
                                                    <i class="ti ti-photo f-18"></i>
                                                </a>
                                            </li> --}}
                                            <li class="list-inline-item">
                                                <a href="#" class="avtar avtar-s btn-link-secondary">
                                                    <i class="ti ti-paperclip f-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="avtar avtar-s btn-link-secondary">
                                                    <i class="ti ti-map-pin f-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col text-end">
                                        <button class="btn btn-primary">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-3">
                                    <div class="chat-avtar">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <div class="bg-success chat-badge"></div>
                                    </div>
                                    <div class="media-body mx-2">
                                        <h5 class="mb-0">John Doe</h5>
                                        <span class="text-sm text-muted">Technical Department</span>
                                    </div>
                                    <div class="dropdown">
                                        <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                            href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i
                                                class="material-icons-two-tone f-18">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                    PageMaker including versions
                                    of Lorem Ipsum.</p>
                                
                                <div class="row my-4">
                                    <div class="col">
                                        <a href="#" class="btn btn-link-dark">
                                            <i class="material-icons-two-tone me-1">thumb_up_alt</i> 450K <small
                                                class="text-muted">Likes</small></a>
                                        <a href="#" class="btn btn-link-secondary">
                                            <i class="material-icons-two-tone me-1">comment</i>500 <small
                                                class="text-muted">Comments</small></a>
                                                <a href="#" class="btn btn-link-secondary">
                                                    <i class="material-icons-two-tone me-1">push_pin</i><small
                                                        class="text-muted">Pin</small></a> 
                                        <a href="#" class="btn btn-link-secondary">
                                            <i class="material-icons-two-tone me-1">bookmarks</i><small
                                                class="text-muted">Save</small></a>
                                              
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">30 Comments</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-block">
                                    <div class="comment">
                                        <div class="media align-items-start">
                                            <div class="chat-avtar flex-shrink-0">
                                                <img class="rounded-circle img-fluid wid-40"
                                                    src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                <div class="bg-success chat-badge"></div>
                                            </div>
                                            <div class="media-body ms-3">
                                                <h5 class="mb-0">John Doe</h5>
                                                <span class="text-sm text-muted">2 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="mb-2 mt-3">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                            <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <div class="mb-4">
                                            <a href="#" class="btn btn-link-dark">
                                                <i class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                450</a>
                                            <a href="#" class="btn btn-link-secondary"> <i
                                                    class="material-icons-two-tone me-1">share</i>100</a>
                                        </div>
                                    </div>
                                    <div class="comment sub-comment">
                                        <div class="media align-items-start">
                                            <div class="chat-avtar flex-shrink-0">
                                                <img class="rounded-circle img-fluid wid-40"
                                                    src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                <div class="bg-success chat-badge"></div>
                                            </div>
                                            <div class="media-body ms-3">
                                                <h5 class="mb-0">John Doe</h5>
                                                <span class="text-sm text-muted">2 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <div class="card mt-3 mb-0">
                                                <div class="card-body">
                                                    <h6>Lorem Ipsum is simply dummy</h6>
                                                    <p class="mb-2">Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s.</p>
                                                    <a href="#"
                                                        class="link-primary mb-1">https://phoenixcoded.net/</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <div class="mb-4">
                                            <a href="#" class="btn btn-link-dark">
                                                <i class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                450</a>
                                            <a href="#" class="btn btn-link-secondary"> <i
                                                    class="material-icons-two-tone me-1">share</i>100</a>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="media align-items-start">
                                            <div class="chat-avtar flex-shrink-0">
                                                <img class="rounded-circle img-fluid wid-40"
                                                    src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                <div class="bg-success chat-badge"></div>
                                            </div>
                                            <div class="media-body ms-3">
                                                <h5 class="mb-0">John Doe</h5>
                                                <span class="text-sm text-muted">2 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="mb-2 mt-3">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                            <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <div class="mb-4">
                                            <a href="#" class="btn btn-link-dark">
                                                <i class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                450</a>
                                            <a href="#" class="btn btn-link-secondary"> <i
                                                    class="material-icons-two-tone me-1">share</i>100</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center mt-3">
                                    <img class="img-radius d-none d-sm-inline-flex me-3 wid-40 rounded-circle"
                                        src="../assets/images/user/avatar-1.jpg" alt="User image">
                                    <div class="media-body me-3">
                                        <div class="input-comment">
                                            <input type="email" class="form-control"
                                                placeholder="Type a something...">
                                            <ul class="list-inline start-0 mb-0">
                                                <li class="list-inline-item border-end pe-2 me-2">
                                                    <a href="#" class="avtar avtar-xs btn-link-warning">
                                                        <i class="ti ti-mood-smile f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list-inline end-0 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-photo f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-paperclip f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" class="avtar avtar-s btn btn-primary">
                                        <i class="ti ti-send f-18"></i>
                                    </a>
                                </div>
                            </div>
                        </div> --}}

                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-3">
                                    <div class="chat-avtar">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <div class="bg-success chat-badge"></div>
                                    </div>
                                    <div class="media-body mx-2">
                                        <h5 class="mb-0">John Doe</h5>
                                        <span class="text-sm text-muted">Technical Department</span>
                                    </div>
                                    <div class="dropdown">
                                        <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                            href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i
                                                class="material-icons-two-tone f-18">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                    PageMaker including versions
                                    of Lorem Ipsum.</p>
                               
                                <div class="row my-4 align-items-center">
                                    <div class="col">
                                        <a href="#" class="btn btn-link-dark">
                                            <i class="material-icons-two-tone me-1">thumb_up_alt</i> 450K <small
                                                class="text-muted">Likes</small></a>
                                        <a href="#" class="btn btn-link-secondary">
                                            <i class="material-icons-two-tone me-1">comment</i>500 <small
                                                class="text-muted">Comments</small></a>
                                                <a href="#" class="btn btn-link-secondary">
                                                    <i class="material-icons-two-tone me-1">push_pin</i><small
                                                        class="text-muted">Pin</small></a>   
                                        <a href="#" class="btn btn-link-secondary">
                                            <i class="material-icons-two-tone me-1">bookmarks</i><small
                                                class="text-muted">Save</small></a>
                                              
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2">30 Comments</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-block">
                                    <div class="comment">
                                        <div class="media align-items-start">
                                            <div class="chat-avtar flex-shrink-0">
                                                <img class="rounded-circle img-fluid wid-40"
                                                    src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                <div class="bg-success chat-badge"></div>
                                            </div>
                                            <div class="media-body ms-3">
                                                <h5 class="mb-0">John Doe</h5>
                                                <span class="text-sm text-muted">2 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p class="mb-2 mt-3">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and
                                                scrambled it to make a type specimen book.</p>
                                            <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        {{-- <div class="mb-4">
                                            <a href="#" class="btn btn-link-dark">
                                                <i class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                450</a>
                                            <a href="#" class="btn btn-link-secondary"> <i
                                                    class="material-icons-two-tone me-1">share</i>100</a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="media align-items-center mt-3">
                                    <img class="img-radius d-none d-sm-inline-flex me-3 wid-40 rounded-circle"
                                        src="../assets/images/user/avatar-1.jpg" alt="User image">
                                    <div class="media-body me-3">
                                        <div class="input-comment">
                                            <input type="email" class="form-control"
                                                placeholder="Type a something...">
                                            <ul class="list-inline start-0 mb-0">
                                                <li class="list-inline-item border-end pe-2 me-2">
                                                    <a href="#" class="avtar avtar-xs btn-link-warning">
                                                        <i class="ti ti-mood-smile f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list-inline end-0 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-photo f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                        <i class="ti ti-paperclip f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="#" class="avtar avtar-s btn btn-primary">
                                        <i class="ti ti-send f-18"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5>Friends <span class="badge bg-primary rounded-pill">99</span></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">John Doe</h6>
                                            <p class="mb-0">@John_Doe</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-5.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Addie Bass</h6>
                                            <p class="mb-0">@A_Bass</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-3.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Alberta Robbins</h6>
                                            <p class="mb-0">@AlbeRob12</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-4.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Agnes McGee</h6>
                                            <p class="mb-0">@AgnMcGee</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-5.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Lilla Bardenova</h6>
                                            <p class="mb-0">@lillabardenova</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-6.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">John Doe</h6>
                                            <p class="mb-0">@John_Doe</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-7.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Addie Bass</h6>
                                            <p class="mb-0">@A_Bass</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-8.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Alberta Robbins</h6>
                                            <p class="mb-0">@AlbeRob12</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-9.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Agnes McGee</h6>
                                            <p class="mb-0">@AgnMcGee</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-10.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Lilla Bardenova</h6>
                                            <p class="mb-0">@lillabardenova</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">John Doe</h6>
                                            <p class="mb-0">@John_Doe</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-5.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Addie Bass</h6>
                                            <p class="mb-0">@A_Bass</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-3.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Alberta Robbins</h6>
                                            <p class="mb-0">@AlbeRob12</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-4.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Agnes McGee</h6>
                                            <p class="mb-0">@AgnMcGee</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-5.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Lilla Bardenova</h6>
                                            <p class="mb-0">@lillabardenova</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-6.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">John Doe</h6>
                                            <p class="mb-0">@John_Doe</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-7.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Addie Bass</h6>
                                            <p class="mb-0">@A_Bass</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-8.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Alberta Robbins</h6>
                                            <p class="mb-0">@AlbeRob12</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-9.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Agnes McGee</h6>
                                            <p class="mb-0">@AgnMcGee</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <img class="rounded-circle img-fluid wid-40"
                                            src="../assets/images/user/avatar-10.jpg" alt="User image">
                                        <div class="media-body mx-2">
                                            <h6 class="mb-0">Lilla Bardenova</h6>
                                            <p class="mb-0">@lillabardenova</p>
                                        </div>
                                        <button class="btn btn-outline-secondary">Message</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="friends" role="tabpanel" aria-labelledby="friends-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5>Friends Request <span class="badge bg-primary rounded-pill">30</span></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-1.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">John Doe</h6>
                                                <p class="mb-0">@John_Doe</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-5.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Addie Bass</h6>
                                                <p class="mb-0">@A_Bass</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-3.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Alberta Robbins</h6>
                                                <p class="mb-0">@AlbeRob12</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-4.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Agnes McGee</h6>
                                                <p class="mb-0">@AgnMcGee</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-5.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Lilla Bardenova</h6>
                                                <p class="mb-0">@lillabardenova</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-6.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">John Doe</h6>
                                                <p class="mb-0">@John_Doe</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-7.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Addie Bass</h6>
                                                <p class="mb-0">@A_Bass</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-8.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Alberta Robbins</h6>
                                                <p class="mb-0">@AlbeRob12</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-9.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Agnes McGee</h6>
                                                <p class="mb-0">@AgnMcGee</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-10.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Lilla Bardenova</h6>
                                                <p class="mb-0">@lillabardenova</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-1.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">John Doe</h6>
                                                <p class="mb-0">@John_Doe</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-5.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Addie Bass</h6>
                                                <p class="mb-0">@A_Bass</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-3.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Alberta Robbins</h6>
                                                <p class="mb-0">@AlbeRob12</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-4.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Agnes McGee</h6>
                                                <p class="mb-0">@AgnMcGee</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-5.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Lilla Bardenova</h6>
                                                <p class="mb-0">@lillabardenova</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-6.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">John Doe</h6>
                                                <p class="mb-0">@John_Doe</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-7.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Addie Bass</h6>
                                                <p class="mb-0">@A_Bass</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-8.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Alberta Robbins</h6>
                                                <p class="mb-0">@AlbeRob12</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-9.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Agnes McGee</h6>
                                                <p class="mb-0">@AgnMcGee</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                                        <div class="media align-items-center mb-3 mb-sm-0">
                                            <img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-10.jpg" alt="User image">
                                            <div class="media-body mx-2">
                                                <h6 class="mb-0">Lilla Bardenova</h6>
                                                <p class="mb-0">@lillabardenova</p>
                                            </div>
                                        </div>
                                        <div class="ms-5 ms-sm-0">
                                            <button class="btn btn-outline-secondary me-1">Decline</button>
                                            <button class="btn btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5>Gallery</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-1.jpg">
                                            <img src="../assets/images/application/img-gallery-1.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row g-2">
                                            <div class="col-md-12">
                                                <a class="img-post card social-gallery-card"
                                                    data-lightbox="../assets/images/application/img-gallery-2.jpg">
                                                    <img src="../assets/images/application/img-gallery-2.jpg"
                                                        alt="img" class="card-img">
                                                    <div class="card-img-overlay">
                                                        <i class="ti ti-cloud-download"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="img-post card social-gallery-card"
                                                    data-lightbox="../assets/images/application/img-gallery-3.jpg">
                                                    <img src="../assets/images/application/img-gallery-3.jpg"
                                                        alt="img" class="card-img">
                                                    <div class="card-img-overlay">
                                                        <i class="ti ti-cloud-download"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-4.jpg">
                                            <img src="../assets/images/application/img-gallery-4.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-5.jpg">
                                            <img src="../assets/images/application/img-gallery-5.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-6.jpg">
                                            <img src="../assets/images/application/img-gallery-6.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-7.jpg">
                                            <img src="../assets/images/application/img-gallery-7.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-8.jpg">
                                            <img src="../assets/images/application/img-gallery-8.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row g-2">
                                            <div class="col-md-12">
                                                <a class="img-post card social-gallery-card"
                                                    data-lightbox="../assets/images/application/img-gallery-2.jpg">
                                                    <img src="../assets/images/application/img-gallery-2.jpg"
                                                        alt="img" class="card-img">
                                                    <div class="card-img-overlay">
                                                        <i class="ti ti-cloud-download"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="img-post card social-gallery-card"
                                                    data-lightbox="../assets/images/application/img-gallery-3.jpg">
                                                    <img src="../assets/images/application/img-gallery-3.jpg"
                                                        alt="img" class="card-img">
                                                    <div class="card-img-overlay">
                                                        <i class="ti ti-cloud-download"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-1.jpg">
                                            <img src="../assets/images/application/img-gallery-1.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-5.jpg">
                                            <img src="../assets/images/application/img-gallery-5.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-6.jpg">
                                            <img src="../assets/images/application/img-gallery-6.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-4.jpg">
                                            <img src="../assets/images/application/img-gallery-4.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-8.jpg">
                                            <img src="../assets/images/application/img-gallery-8.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="img-post card social-gallery-card"
                                            data-lightbox="../assets/images/application/img-gallery-7.jpg">
                                            <img src="../assets/images/application/img-gallery-7.jpg" alt="img"
                                                class="card-img">
                                            <div class="card-img-overlay">
                                                <i class="ti ti-cloud-download"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
