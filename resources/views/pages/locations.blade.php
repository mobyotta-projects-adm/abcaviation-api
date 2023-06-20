<x-app-layout>
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col text-left">
                            <h5>Locations</h5>
                        </div>
                        <div class="col text-end text-right"> <button type="button" class="btn btn-primary btn-sm">Add
                                Location</button></div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-default">
                        <thead>
                            <tr>
                                <th scope="col">Location Name </th>
                                <th scope="col">Location Address </th>
                                <th scope="col">Areas</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">139 Office, Terminal 3</td>
                                <td> Heathrow Terminal 3, TW6 1EW, London</td>
                                <td style="max-width:300px; white-space : normal">DHL-Q-134(HHS) - DM, Planning ,
                                    Training & Development, DHL-Q-071(Staff
                                    Transport)-Dri, DHL-Q-076(Warehouse Ass)-Dri </td>
                                <td>

                                    <div class="dropdown open">
                                        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button"
                                            id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <button class="dropdown-item" href="#">Action</button>
                                            <button class="dropdown-item disabled" href="#">Disabled
                                                action</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>



    @push('body')
        <script>
            console.log("hi")
        </script>
    @endpush

</x-app-layout>
