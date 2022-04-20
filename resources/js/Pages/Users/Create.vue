<template>
    <div class='mt-4 mx-auto max-w-md h-screen'>
        <div class='flex flex-col gap-4'>
            <div class='flex gap-2 items-center'>
                <h1 class='text-2xl font-bold text-red-500'>Novo Usuário</h1>
                <Link href="/" class='text-blue-500 font-bold underline'>Voltar a listagem</Link>
            </div>

            <form @submit.prevent='submit' class='flex flex-col gap-2'>
                <div class='flex flex-col'>
                    <input type="text" v-model='form.name' name='name' placeholder='Digite seu nome' />
                    <ValidationError :hasError='form.errors.name' />
                </div>

                <div class='flex flex-col'>
                    <input type="text" v-model='form.email' name='email' placeholder='Digite seu e-mail' />
                    <ValidationError :hasError='form.errors.email' />
                </div>

                <div class='flex flex-col'>
                    <input type="password" v-model='form.password' name='password' placeholder='Digite sua senha' />
                    <ValidationError :hasError='form.errors.password' />
                </div>
                <button class='rounded bg-green-500 p-2' type="submit">Salvar</button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import ValidationError from '../../Shared/ValidationError';

defineProps({
    errors: Object,
});

let form = useForm({
    name: '',
    email: '',
    password: '',
});

let submit = () => {
    form.post('/');
};


</script>
