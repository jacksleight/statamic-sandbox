import AddonConfigTest from './components/fieldtypes/AddonConfigTest.vue';

Statamic.booting(() => {
    console.log('addon config cp.js loaded');
    Statamic.$components.register('addon_config_test-fieldtype', AddonConfigTest);
});
