export default function PrimaryButton({
    className = '',
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `btn btn-primary m-3
                ` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
