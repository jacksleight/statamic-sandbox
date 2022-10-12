import AddonTest from './components/fieldtypes/AddonTest.vue';

Statamic.booting(() => {
    console.log('addon cp.js loaded');
    Statamic.$components.register('addon_test-fieldtype', AddonTest);
});
