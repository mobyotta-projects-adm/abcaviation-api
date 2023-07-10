<form action="">
    <h2>Work Details</h2>
    <br>
    <div class="form-group row mt-2">
        <div class="col-md-6">
            <label for="config-WEEK_START"><strong>Access level</strong></label>
            <p class="gray text--small margin-none">A set of permissions that control what a team member can do in
                Deputy. </p>
        </div>
        <div class="col-md-6">
            <select wire:model="week_start" class="config-entry form-control" id="config-WEEK_START">
                <option value="1">Mon</option>
                <option value="2">Tue</option>
                <option value="3">Wed</option>
                <option value="4">Thu</option>
                <option value="5">Fri</option>
                <option value="6">Sat</option>
                <option value="7">Sun</option>
            </select>
            <x-jet-input-error for="country" />
        </div>

    </div>

    <div class="form-group row mt-2">
        <div class="col-md-6">
            <label for="config-WEEK_START"><strong>Works At</strong></label>
            <p class="gray text--small margin-none">Locations where a team member can be scheduled. </p>
        </div>
        <div class="col-md-6">

            <table class="table table-default">
                <tbody>
                    <tr>
                        <td scope="row">Vancouver International Airport </td>
                        <td><strong>Primary</strong></td>
                    </tr>
                    <tr>
                        <td scope="row">Vancouver International Airport</td>
                        <td>
                            <a href="#">Set Primary</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

    <div class="form-group row mt-2">
        <div class="col-md-6">
            <label for="config-WEEK_START"><strong>Hired on</strong></label>

        </div>
        <div class="col-md-6">
            <x-jet-input id="date_of_birth" type="date"
                class="{{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" wire:model="date_of_birth" />
            <x-jet-input-error for="date_of_birth" />
        </div>

    </div>


    <div class="form-group row mt-2">
        <div class="col-md-6">
            <label for="config-WEEK_START"><strong>Training</strong></label>
            <p class="gray text--small margin-none">Training allows a team member to work in areas with training
                requirements. </p>
        </div>
        <div class="col-md-6">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                            the collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>
