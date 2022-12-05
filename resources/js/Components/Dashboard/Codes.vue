<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/inertia-vue3';
import Positions from '@/Components/Dashboard/Components/Positions.vue';
import Locations from '@/Components/Dashboard/Components/Locations.vue';

defineProps({
    canLogin: Boolean,
});

const tabNumber = ref("Positions");

</script>

<template>
    <Head title="Codes" />

    <div>

        <div class="mb-10">

            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                <select id="tabs" name="tabs"
                    class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    <option>My Account</option>
        
                    <option>Company</option>
        
                    <option selected>Team Members</option>
        
                    <option>Billing</option>
                </select>
            </div>

            <div class="hidden sm:block">
                <nav class="flex space-x-3" aria-label="Tabs">
                    <!-- Current: "bg-gray-200 text-gray-800", Default: "text-gray-600 hover:text-gray-800" -->
                    <a :class="(tabNumber == 'Positions' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Positions'" href="#" class="px-3 py-2 font-medium text-sm rounded-md">
                        Positions
                    </a>
                    <a :class="(tabNumber == 'Locations' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Locations'" href="#" class="px-3 py-2 font-medium text-sm rounded-md">
                        Locations
                    </a>

                    <a :class="(tabNumber == 'Capital' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Capital'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Capital
                    </a>
                    <a :class="(tabNumber == 'Equipment' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Equipment'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Equipment
                    </a>
                    <a :class="(tabNumber == 'Logistics' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Logistics'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Logistics
                    </a>
                    <a :class="(tabNumber == 'Support' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Support'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Support
                    </a>
                    <a :class="(tabNumber == 'Safety' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Safety'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Safety $ Security
                    </a>
                    <a :class="(tabNumber == 'Implementation' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Implementation'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Implementation
                    </a>
                    <a :class="(tabNumber == 'Grant' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Grant'" href="#" class="px-3 py-2 font-medium text-sm rounded-md"
                        aria-current="page">
                        Grant Codes
                    </a>
                    <a :class="(tabNumber == 'Billing' ? 'bg-indigo-600 text-white shadow-xl' : 'bg-gray-100 text-gray-600')" @click.prevent="tabNumber ='Billing'" href="#" class="px-3 py-2 font-medium text-sm rounded-md">
                        Billing
                    </a>
                </nav>
            </div>

        </div>
        
        <Positions v-if="tabNumber=='Positions'" />
        <Locations v-if="tabNumber =='Locations'" />

    </div>


</template>
