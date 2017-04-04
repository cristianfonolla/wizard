@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
    <div class="nav-tabs-custom">

        <div class="progress progress-sm active">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                 style="width: 50%">
                <span class="sr-only">50% Complete</span>
            </div>
        </div>



        <wizard>

            <wizard-step title="Usuari" active="true">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nam nisi nobis obcaecati. Ab accusantium architecto distinctio dolorem dolores ducimus eos hic praesentium provident quae quis, repellat tempore vero.
            </wizard-step>

            <wizard-step title="Dades Personals">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nam nisi nobis obcaecati. Ab accusantium architecto distinctio dolorem dolores ducimus eos hic praesentium provident quae quis, repellat tempore vero.
            </wizard-step>

            <wizard-step title="Estudi i curs">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nam nisi nobis obcaecati. Ab accusantium architecto distinctio dolorem dolores ducimus eos hic praesentium provident quae quis, repellat tempore vero.
            </wizard-step>

            <wizard-step title="Moduls professionals">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nam nisi nobis obcaecati. Ab accusantium architecto distinctio dolorem dolores ducimus eos hic praesentium provident quae quis, repellat tempore vero.
            </wizard-step>

            <wizard-step title="Unitats Formatives">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et labore nam nisi nobis obcaecati. Ab accusantium architecto distinctio dolorem dolores ducimus eos hic praesentium provident quae quis, repellat tempore vero.
            </wizard-step>



        </wizard>

        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
            <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
            <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
            <li><a href="#tab_4" data-toggle="tab">Tab 4</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
            </li>
            <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                    the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos ipsum recusandae reiciendis sed, vitae voluptatum. Ab ad autem, cumque eius labore laborum maxime quae quia, ratione rem sint voluptates.
            </div>
        </div>
        <!-- /.tab-content -->
        <div class="box-footer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi delectus explicabo, itaque neque pariatur quam repellat ullam vel velit veniam. Aliquid autem consequuntur, cumque doloribus explicabo maiores sunt.
        </div>
    </div>

@endsection
