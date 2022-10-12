import LocalTest from './components/fieldtypes/LocalTest.vue';

Statamic.booting(() => {
    console.log('local cp.js loaded');
    Statamic.$components.register('local_test-fieldtype', LocalTest);
});
