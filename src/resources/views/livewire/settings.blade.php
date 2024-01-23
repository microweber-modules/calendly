<div x-data="{
showMainEditTab: 'mainSettings'
}">

    <?php
    $moduleTemplates = module_templates($moduleType);
    ?>

    @if($moduleTemplates && count($moduleTemplates) >  1)
        <div class="d-flex justify-content-between align-items-center collapseNav-initialized form-control-live-edit-label-wrapper">
            <div class="d-flex flex-wrap gap-md-4 gap-3">
                <button x-on:click="showMainEditTab = 'mainSettings'"
                        :class="{ 'active': showMainEditTab == 'mainSettings' }"
                        class="btn btn-link text-decoration-none mw-admin-action-links mw-adm-liveedit-tabs active">
                    @lang('Main settings')
                </button>
                <button x-on:click="showMainEditTab = 'design'" :class="{ 'active': showMainEditTab == 'design' }"
                        class="btn btn-link text-decoration-none mw-admin-action-links mw-adm-liveedit-tabs">
                    @lang('Design')
                </button>
            </div>
        </div>
    @endif

        <div x-show="showMainEditTab=='mainSettings'">

            <div>
                <label class="live-edit-label"><?php _e("Calendly Link"); ?></label>
                <livewire:microweber-option::text optionKey="link" :optionGroup="$moduleId" :module="$moduleType"  />
            </div>

            <div>
                <label class="live-edit-label"><?php _e("Link Text"); ?></label>
                <livewire:microweber-option::text optionKey="link_text" :optionGroup="$moduleId" :module="$moduleType"  />
            </div>


            <div class="col-md-6">
                <label class="live-edit-label"><?php _e("Calendly Style"); ?></label>
                @php
                    $radioOptions = [
                        'default' => 'Inline Embed',
                        'popup_text' => 'Popup Text',
                    ];
                @endphp
                <livewire:microweber-option::dropdown :dropdownOptions="$radioOptions" optionKey="style" :optionGroup="$moduleId" :module="$moduleType"  />
            </div>

           <div class="p-2">
               <div class="mt-2">
                   <livewire:microweber-option::color-picker label="Background Color" optionKey="background_color" :optionGroup="$moduleId" :module="$moduleType"  />
               </div>

               <div class="mt-2">
                   <livewire:microweber-option::color-picker label="Text Color" optionKey="text_color" :optionGroup="$moduleId" :module="$moduleType"  />
               </div>

               <div class="mt-2">
                   <livewire:microweber-option::color-picker label="Button & Link Color" optionKey="primary_color" :optionGroup="$moduleId" :module="$moduleType"  />
               </div>
           </div>

        </div>

    @if($moduleTemplates && count($moduleTemplates) >  1)

        <div x-show="showMainEditTab=='design'" x-transition:enter="tab-pane-slide-right-active">

            <div>
                <livewire:microweber-live-edit::module-select-template :moduleId="$moduleId" :moduleType="$moduleType"/>
            </div>
        </div>

    @endif
</div>
