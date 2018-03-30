<template>
    <div class="w-full">
        <form action="/sites" method="post" @submit.prevent="submit()">
            <input type="hidden" name="_token" :value="csrf">
            <div v-show="step === 1">
                <div class="w-full">
                    <h1 class="text-4xl xl:text-5xl lg:text-5xl md:text-5xl font-bold leading-tight tracking-tight mb-8">1. Importera event från facebook.</h1>
                    <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">För att det ska gå så enkelt och snabbt som möjligt att skapa en hemsida för ditt event så kan du importera dina event från facebook.</p>
                    
                    <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8 pb-8">Välj det event du vill importera.</p>
                    <div class="flex flex-col h-64 overflow-y-scroll">
                        <div class="w-full mb-4">
                            <label class="cursor-pointer h-48 flex justify-center items-center bg-white rounded overflow-hidden p-8">
                                <input class="mr-4 hidden" @click="next()" type="radio" :value="facebookEvents[0]" v-model="site.event">
                                <h5 class="text-lg text-pink-dark">Event #1</h5>
                            </label>
                        </div>

                        <div class="w-full mb-4">
                            <label class="cursor-pointer h-48 flex justify-center items-center bg-white rounded overflow-hidden p-8">
                                <input class="mr-4 hidden" @click="next()" type="radio" :value="facebookEvents[1]" v-model="site.event">
                                <h5 class="text-lg text-pink-dark">Event #2</h5>
                            </label>
                        </div>

                        <div class="w-full mb-4">
                            <label class="cursor-pointer h-48 flex justify-center items-center bg-white rounded overflow-hidden p-8">
                                <input class="mr-4 hidden" @click="next()" type="radio" :value="facebookEvents[2]" v-model="site.event">
                                <h5 class="text-lg text-pink-dark">Event #3</h5>
                            </label>
                        </div>
                    </div>

                    <!-- <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">Logga in med facebook och välj sedan det event du vill importera.</p>
                    <div class="flex flex-row sm:flex-row justify-start pt-8">
                        <button class="hover-slide-up mt-8 bg-white text-sm leading-none text-pink-dark font-bold uppercase h-16 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">
                            Logga in med facebook
                        </button>
                    </div> -->
                </div>
            </div>

            <div v-show="step === 2">
                <div>
                    <h1 class="text-4xl xl:text-5xl lg:text-5xl md:text-5xl font-bold leading-tight tracking-tight mb-8">2. Välj design.</h1>
                    <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">För att du ska kunna sticka ut från mängden och göra ditt event till en succé så kan du välja din egna design till ditt events hemsida.</p>
                    
                    <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">Välj en färg och ett typsnitt som passar ditt event.</p>
                    <div class="flex flex-row sm:flex-row justify-start pt-8">
                        <input class="mr-4" type="radio" value="#000000" v-model="site.design.color">
                        <select class="mr-4" type="radio" v-model="site.design.fonts">
                            <option value="'Poppins', sans-serif">Poppins</option>
                            <option value="'Raleway', sans-serif">Raleway</option>
                            <option value="'Open Sans', sans-serif">Open Sans</option>
                            <option value="'Oswald', sans-serif">Oswald</option>
                        </select>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-start pt-8">
                        <button @click.prevent="prev()" class="hover-slide-up mt-8 bg-white text-sm leading-none text-pink-dark font-bold uppercase h-16 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">Gå tillbaka</button>
                        <button @click.prevent="next()" class="hover-slide-up mt-8 bg-white text-sm leading-none text-pink-dark font-bold uppercase h-16 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">Nästa</button>
                    </div>
                </div>
            </div>

            <div v-show="step === 3">
                <div>
                    <h1 class="text-4xl xl:text-5xl lg:text-5xl md:text-5xl font-bold leading-tight tracking-tight mb-8">Hurra, ditt events hemsida är klar!</h1>
                    <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">Ditt events hemsida är klar och redo att publiceras. Innan du publicerar hemsidan så kan du förhandsgranska den via länken nedan.</p>
                    
                    <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">Din hemsida går att förhandsgranska på den här adressen: <br><br> <a class="text-white no-underline" href="http://unga-programmerare.smultrondemo.test/" target="_blank">http://unga-programmerare.smultrondemo.test/</a></p>

                    <div class="flex flex-col sm:flex-row justify-start pt-8">
                        <button @click.prevent="prev()" class="hover-slide-up mt-8 bg-white text-sm leading-none text-pink-dark font-bold uppercase h-16 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">Gå tillbaka</button>
                        <input type="submit" value="Publicera min hemsida!" class="cursor-pointer hover-slide-up mt-8 bg-white text-sm leading-none text-pink-dark font-bold uppercase h-16 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">
                    </div>
                </div>
            </div>
        </form>

        <br/><br/>site: {{site}}
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                step: 1,
                site: {
                    event: {
                        title: null,
                        description: null
                    },
                    design: {
                        color: null,
                        fonts: null
                    }
                },
                // Tänker att data från facebookevents läggs här i arrayen och sedan loopas ut där uppe i radio inputsen.
                // Varje radio input har value facebookEvents[i] och mappas med v-model till site.event
                facebookEvents: [
                    {
                        title: '#1 event here',
                        description: '#1 description'
                    },
                    {
                        title: '#2 event here',
                        description: '#2 description'
                    },
                    {
                        title: '#3 event here',
                        description: '#3 description'
                    }
                ]
            }
        },
        methods: {
            prev() {
                this.step--
            },
            next() {
                this.step++
            },
            submit() {
                axios.post('/sites', this.site).then((data) => {
                    console.log(data)
                });
            }
        }
    }
</script>
