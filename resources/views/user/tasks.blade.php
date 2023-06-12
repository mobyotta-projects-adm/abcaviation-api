<x-app-layout>

    <div id="container-tasks" class="container-pane container--wide padding--large" style="display: block;">
        <div class="main">
            <div id="desktop-task-wrapper">
                <div class="m-title mb25">
                    <h1 class="m-title-left">Tasks</h1>
                    <div class="m-title-right">
                        <div class="btn-group">


                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Add task <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="js-showAddTaskModal" href="">Tasks for a whole area</a></li>
                                <li><a href="" class="js-Add-Personal-Task" data-prop="myTask">A task for me</a>
                                </li>
                                <li><a href="" class="js-Add-Personal-Task" data-prop="assignTask">A task for
                                        someone else</a></li>
                            </ul>


                        </div>
                    </div>
                </div>

                <!-- ?php include(DEPUTEC_TPL_FOLDER . 'desktop/onboarding/_inc_tasks.php'); ? -->

                <div class="m-tasks-wrapper margin-none">
                    <!-- 		<ul class="nav nav-tabs">
                        <li class="col-xs-6 col-sm-3 col-sm-offset-3 active">
                            <a href="#task-inbox" data-toggle="tab" class="hasNotification">
                                Your tasks
                                <span class="m-notification js-Task-Count js-task-inbox">2</span>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-3">
                            <a href="#task-assigned" data-toggle="tab" class="hasNotification">
                                Assigned tasks
                                <span class="m-notification js-Task-Count js-task-assigned">2</span>
                            </a>
                        </li>
                    </ul> -->

                    <div class="u-padding-top-bottom m-tasks-controls js-tasks-controls">
                        <div class="m-tasks-location-selector u-inline-block u-alignMiddle">
                            <div class="btn-group" role="group" aria-lable="...">
                                <a type="button"
                                    class="btn btn-default location-info js-location-info js-tooltip icon-only"
                                    href="#map/19" data-dp-analytics="" rel="tooltip" data-original-title="Location"><i
                                        class="co-icon-location"></i></a>
                                <div class="select2-container u-inline-block u-alignMiddle u-truncate btn btn-default select2-container-active"
                                    id="s2id_mTasksLocationSelector"><a href="javascript:void(0)" class="select2-choice"
                                        tabindex="-1"> <span class="select2-chosen" id="select2-chosen-12"> 139 Office,
                                            Terminal 3</span><abbr class="select2-search-choice-close"></abbr> <span
                                            class="select2-arrow co-icon-caret-down"
                                            role="presentation"></span></a><label for="s2id_autogen12"
                                        class="select2-offscreen"></label><input
                                        class="select2-focusser select2-offscreen" type="text" aria-haspopup="true"
                                        role="button" aria-labelledby="select2-chosen-12" id="s2id_autogen12"></div>
                                <select
                                    class="select2-container u-inline-block u-alignMiddle u-truncate btn btn-default"
                                    id="mTasksLocationSelector" tabindex="-1" title="" style="display: none;">
                                    <option value="22"> Terminal 1</option>
                                    <option value="19"> 139 Office, Terminal 3</option>
                                    <option value="25"> 400 Hours Group</option>
                                    <option value="63"> ABCoast Agility</option>
                                    <option value="47"> Active Group</option>
                                    <option value="59"> British Airways</option>
                                    <option value="57"> COBALT RAMP</option>
                                    <option value="35"> CONTACT 4</option>
                                    <option value="53"> Do Not Use</option>
                                    <option value="27"> Drivers</option>
                                    <option value="54"> Flexi-Furlough</option>
                                    <option value="60"> Heathrow Polar Park Police Stati</option>
                                    <option value="26"> HOD</option>
                                    <option value="36"> Mandatory Training</option>
                                    <option value="58"> Operatives</option>
                                    <option value="62"> T/L Group</option>
                                    <option value="18"> Terminal 2</option>
                                    <option value="20"> Terminal 3</option>
                                    <option value="17"> Terminal 4</option>
                                    <option value="16"> Terminal 5</option>
                                    <option value="11"> The Mill Heathrow</option>
                                    <option value="52"> Vancouver International Airport</option>
                                    <option value="56"> Wilson James</option>
                                    <option value="61"> YVR Coast MTE</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-group m-tasks-date-nav ml2">
                            <button class="btn btn-default js-date-control" data-direction="left">
                                <i class="co-icon-arrow-left" data-direction="left"></i>
                            </button>
                            <div id="vs-calendar" class="btn btn-default" data-toggle="buttons-radio">
                                <i class="fa fa-calendar ml5"></i>
                                <span class="ml5 js-calendar-display">Mon, 12 Jun 2023</span>
                                <input type="text" id="task-datePicker"
                                    class="m-datepicker-hidden u-textCenter hasDatepicker">
                                <i class="co-icon-caret-down ml5"></i>
                                <button type="button"
                                    class="ui-datepicker-trigger m-datepicker-hidden js-date-picker-button">
                                    ...
                                </button>
                            </div>
                            <button class="btn btn-default js-date-control js-date-control-right"
                                data-direction="right">
                                <i class="co-icon-arrow-right" data-direction="right"></i>
                            </button>
                        </div>


                        <a class="btn btn-default ml2 js-tooltip js-refresh" rel="tooltip"
                            data-original-title="Reload"><i class="fa fa-refresh"></i></a>

                        <!--div class="btn-group m-tasks-date-nav">
                    <button class="btn btn-default js-date-control" data-direction="left">
                        <i class="co-icon-caret-left" data-direction="left"></i>
                    </button>
                    <div class="btn btn-default" data-toggle="buttons-radio">
                        <i class="fa fa-calendar ml5"></i>
                        <span class="ml5">13 Nov 2017</span>
                        <i class="ml5 co-icon-caret-down"></i>
                        <input class="m-datepicker-hidden js-no-keyboard hasDatepicker" type="text" id="task-datePicker">
                    </div>
                    <button class="btn btn-default js-date-control" data-direction="right">
                        <i class="co-icon-caret-right" data-direction="right"></i>
                    </button>
                </div-->

                        <div class="m-tasks-search margin-none u-inline-block u-pullRight u-alignMiddle">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-search"></i></div>

                                <input tabindex="3" id="task-searchbox" class="form-control"
                                    placeholder="Search for tasks, areas..." data-dp-analytics="DTSH">

                            </div>
                        </div>
                    </div>

                    <div class="js-task-list pb20">
                        <!--             <h4 class="js-task-list-title">Task List</h4> -->
                        <ul class="js-task-group-list m-task-group-list">

                            <li class="u-list-style m-task-list-item u-flex margin-none">








                                <div class="m-task-list-item-name m-task-list-item-name-personal">
                                    <i class="u-inline-block fa fa-user u-font-size-14"></i>
                                    <a href=""
                                        class="u-bold u-inline-block margin-none pl10 js-view-task-group"
                                        data-taskid="-1">
                                        My Tasks
                                    </a>
                                </div>


                                <!-- FOR PERSONAL TASKS ONLY -->
                                <div class="m-tasks-personal-tasks margin-none u-textRight">

                                    <div class="m-task-my-task-img">
                                        <img class="u-avatar-sm js-tooltip"
                                            src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C&amp;width=135&amp;height=135"
                                            rel="tooltip" data-original-title="Cherelle">
                                    </div>

                                </div>



                                <div class="m-task-list-item-stats margin-none">
                                    <p
                                        class="m-task-stats-percent m-task-personal-task-stats u-bold u-font-size-12 u-truncate">
                                        <span> </span>
                                        All Completed</p>
                                </div>


                                <div class="js-task-search" style="display:none;"> My Tasks</div>
                            </li>
                            <li class="u-list-style m-task-list-item u-flex margin-none">








                                <div class="m-task-list-item-name m-task-list-item-name-personal">
                                    <i class="u-inline-block fa fa-users u-font-size-14"></i>
                                    <a href=""
                                        class="u-bold u-inline-block margin-none pl10 js-view-task-group"
                                        data-taskid="-2">
                                        Assigned Tasks
                                    </a>
                                </div>


                                <!-- FOR PERSONAL TASKS ONLY -->
                                <div class="m-tasks-personal-tasks margin-none u-textRight">



                                    <!-- ASSIGNED -->
                                    <div class="m-task-assigned-task-img margin-none">




                                    </div>

                                </div>



                                <div class="m-task-list-item-stats margin-none">
                                    <p
                                        class="m-task-stats-percent m-task-personal-task-stats u-bold u-font-size-12 u-truncate">
                                        <span> </span>
                                        All Completed</p>
                                </div>


                                <div class="js-task-search" style="display:none;"> Assigned Tasks</div>
                            </li>
                        </ul>
                    </div>
                    <div class="m-task-list-loading u-textCenter margin-none pb10" style="display: none;">
                        <h5>Loading Task List <i class="ml5 fa fa-spinner spin infinite"></i></h5>
                    </div>

                    <div class="m-task-no-results padding margin-none pb0" style="display:none;">
                        <div class="row">
                            <div class="col-xs-12 u-flex u-flex-center">
                                <img loading="lazy"
                                    src="https://d2sebmzxyyulvv.cloudfront.net/cffad1139f1dc662afee6e900cc5cfc8a312f59e/images/tasks/tasking-no-results.svg">

                                <p>No search results for tasks were found.</p>

                            </div>
                        </div>
                    </div>

                    <div class="m-task-blank-state padding pb0" style="display: block;">
                        <div class="row">
                            <div class="col-xs-12 u-flex u-flex-center">

                                <h3>No Tasks today!</h3>

                            </div>
                        </div>
                    </div>

                    <div id="btn-see-all-templates" class="row margin-none" style="">
                        <div class="col-xs-12 u-textCenter">
                            <!-- <a class="js-showAddTaskModal btn btn-default">Add task group</a> -->

                        </div>
                    </div>

                    <div id="btn-add-task-group" class="row margin-none" style="display: none">
                        <div class="col-xs-12 u-textCenter">
                            <!-- <a class="js-showAddTaskModal btn btn-default">Add task group</a> -->
                            <a id="create-task-group-link" class="btn btn-line-primary">Add tasks for a whole Area</a>
                        </div>
                    </div>

                    <!--         <div class="padding">
            <div class="tab-pane active" id="task-inbox">
                <div class="content">

                </div>
                <div class="list-actions u-textCenter hidden">
                    <a class="btn btn-link js-loadMoreTasks myTask">Show completed tasks</a>
                </div>
                                            </div>
            <div class="tab-pane" id="task-assigned">
                <div class="content">

                </div>
                <div class="list-actions u-textCenter hidden">
                    <a class="btn btn-link js-loadMoreTasks superTask">Show completed tasks</a>
                </div>
                                            </div>
        </div> -->
                </div>
            </div>

            <!-- TASK COMPLETE HISTORY -->
            <div class="modal modal--tiny" id="task-completedBy" role="dialog" tab-index="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="padding">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Task completed by:</h4>
                                    </div>
                                    <div class="col-xs-12">
                                        <ul id="list-task-completed" class="u-list-style">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END MODAL BODY -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default js-close-task-complete-modal"
                                data-dismiss="modal">
                                Close
                            </button>
                        </div><!-- END MODAL FOOTER -->
                    </div> <!-- END MODAL CONTENT -->
                </div> <!-- END MODAL DIALOGUE -->
            </div>

            <!-- CONFIRM DELETE TASK -->
            <div class="modal modal--tiny" id="task-confirmDelete" role="dialog" tab-index="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-close" aria-label="Close"><span class="di-cross"
                                    aria-hidden="true" data-dismiss="modal"></span></button>
                            <h3 class="modal-title u-textCenter">Delete?</h3>
                        </div>
                        <div class="modal-body">
                            <div class="padding">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p id="delete-taskgroup-msg">Are you sure you want to delete this task group?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END MODAL BODY -->
                        <div id="delete-no-repeat" class="modal-footer">
                            <button type="button" class="btn btn-default js-close-delete-modal">Close</button>
                            <button type="button" class="btn btn-danger js-confirm-delete-task-grp">Delete</button>

                        </div>

                        <div id="delete-repeat" class="modal-footer">
                            <!-- THIS FOR TASKS THAT DON'T REPEAT -->
                            <button type="button" class="btn btn-default js-close-delete-modal"
                                data-dismiss="modal">Close</button>
                            <div class="btn-group">
                                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Delete<span class="caret ml5"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li id="li-delete-this-taskgroup"><a id="delete-this-only"
                                            class="js-confirm-delete-task-grp">This task group</a></li>
                                    <li><a class="js-confirm-delete-all-task-grp" data-dismiss="modal">All future task
                                            groups</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- END MODAL FOOTER -->
                    </div> <!-- END MODAL CONTENT -->
                </div> <!-- END MODAL DIALOGUE -->
            </div>
        </div>
    </div>
</x-app-layout>
