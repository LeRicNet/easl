<div wire:poll.1ms wire:keep.alive
        @class([
           "h-screen",
           "border-double",
           "border-[12px]"  => $considering_view,
           "border-teal-500" => $considering_view
       ])>

    @switch($current_scene)

        @case('trial_1')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_2')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_3')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_4')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_5')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_6')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_7')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_8')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_9')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @case('trial_10')
            @if(isset($study_uid))
                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"
                        id="easl_ohif_viewer" name="easl_ohif_viewer"
                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>
                @break
            @endif

        @default
            <div class="h-screen w-screen bg-gradient-to-br from-slate-900 to-slate-700"></div>

    @endswitch


        {{--<div wire:poll.1ms wire:keep.alive--}}
        {{--        @class([--}}
        {{--           "h-screen",--}}
        {{--           "border-double",--}}
        {{--           "border-[12px]"  => $considering_view,--}}
        {{--           "border-teal-500" => $considering_view--}}
        {{--       ])>--}}
        {{--    @switch($current_scene)--}}
        {{--        @case('consent')--}}
        {{--            <div class="h-screen w-screen bg-gradient-to-tl from-slate-900 to-slate-700"></div>--}}
        {{--            @break--}}

        {{--        @case('persona_survey')--}}
        {{--            <div class="h-screen w-screen bg-gradient-to-tl from-slate-900 to-slate-700"></div>--}}
        {{--            @break--}}

        {{--        @case('instructions')--}}
        {{--            <div class="h-screen w-screen bg-gradient-to-tl from-slate-900 to-slate-700"></div>--}}
        {{--            @break--}}

        {{--        @case('trial_2')--}}
        {{--            @if(isset($study_uid))--}}
        {{--                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"--}}
        {{--                        id="easl_ohif_viewer" name="easl_ohif_viewer"--}}
        {{--                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>--}}
        {{--            @endif--}}
        {{--            @break--}}

        {{--        @case('trial_3')--}}
        {{--            @if(isset($study_uid))--}}
        {{--                <iframe src='http://140.226.123.129:808/ohif/viewer?StudyInstanceUIDs={{ $study_uid }}' title="EASL Viewer"--}}
        {{--                        id="easl_ohif_viewer" name="easl_ohif_viewer"--}}
        {{--                        style="width:100%; height: 100vh; margin:0; border: none; padding: 0;"></iframe>--}}
        {{--            @endif--}}
        {{--            @break--}}

        {{--        @case('exit_survey')--}}
        {{--            <div class="h-screen w-screen bg-gradient-to-tl from-slate-900 to-slate-700"></div>--}}
        {{--            @break--}}

        {{--        @case('end')--}}
        {{--            <div class="h-screen w-screen bg-gradient-to-tl from-slate-900 to-slate-700"></div>--}}
        {{--            @break--}}

        {{--        @default--}}
        {{--            <div class="h-screen w-screen bg-gradient-to-tl from-slate-900 to-slate-700"></div>--}}

        {{--    @endswitch--}}
        {{--</div>--}}
</div>


