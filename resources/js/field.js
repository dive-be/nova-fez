import DetailField from './components/DetailField';
import FormField from './components/FormField';

Nova.booting(Vue => {
    Vue.component('detail-fez', DetailField);
    Vue.component('form-fez', FormField);
});
